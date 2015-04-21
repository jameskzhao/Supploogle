
var bounds;
var ne;
var sw;
var listings;
var map, markerCluster;
var supplier_markers = [];
var port_markers = [];
var infowindow = new google.maps.InfoWindow({maxWidth:320});
/*var markers = {
    '3528Vanness':[49.236958, -123.029286],
    '7800Bennett':[49.161017, -123.139208]
}*/


$( document ).ready(function() {
    initialize();
    get_suppliers('','','',['S','C','L','port','show_name']);
    
    populate_category_dropdown();
    populate_layer_checkbox();
});
function update_map(){
    var keyword = $('#keyword').val().trim();
    //var city = $('#location').val().trim();
    var category = $('#category_select').val();
    var country = $('#country').val().trim();
    var checked_business_type_array = [];
    
    $('#layer_checkbox_area input:checked').each(function(){
        checked_business_type_array.push($(this).val());
    });
    console.info(checked_business_type_array);
    get_suppliers(keyword, country, category,checked_business_type_array);
    //var chkArray = [];
    /* look for all checkboes that have a parent id called 'checkboxlist' attached to it and check if it was checked */
    /*$("#sub_category_checkbox_area input:checked").each(function() {
	chkArray.push($(this).val());
    });*/
    //console.info(chkArray);
    //get_suppliers(keyword, city,category,chkArray);
    
}
function reset_filters(){
     //$('#sub_category_checkbox_area input:checkbox').removeAttr('checked');
     $("#category_select").val($("#category_select option:first").val());
     $("#sub_category_checkbox_area").empty();
     update_map();
}
function reset_keywords(){
    $('#keyword').val('');
    
    $('#country').val('');
    update_map();
}


//updated database, should be get_business instead.

function get_suppliers(keyword, country, category, checked_business_type_array){
    var business_array;
    var bounds = new google.maps.LatLngBounds();
    var post_data = new Object;
    post_data['keyword']=keyword;
    //post_data['city']=city;
    post_data['country']=country;
    post_data['category']=category;
    post_data['checked_business_type_array']=checked_business_type_array;
    //post_data['subcategories']=subcategories;//should be an array
    
    $.post('php/get_supplier.php',post_data, function(data){
        business_array = data['supplier_array'];
        //console.log(business_array.length);
        
        clearMarkers(supplier_markers);
        supplier_markers=[];
        for(i=0; i<business_array.length; i++){
            var business_data = business_array[i];
            
            var business_fill_color = '#FFF';
            //var business_content = '';
            switch(business_data.business_type){
                case 'S':
                    business_fill_color = '#DC3D24';
                    
                    break;
                case 'C':
                    business_fill_color = '#9F17ea';
                    break;
                case 'L':
                    business_fill_color = '#FFF';
                    break;
                case 'port':
                    business_fill_color = '#FFBD0C';
                    break;
            }
            
            
            var business_position = new google.maps.LatLng(business_data.lat, business_data.lng);
            
                //console.info(checked_business_type_array);
                //console.log($.inArray('show_name', checked_business_type_array));
            var business_name = (business_data.business_name?business_data.business_name:business_data.port_name);
            
            var new_marker = new MarkerWithLabel({
                position:business_position,
                map:map,
                //icon:'images/factory.png',
                icon: {
                    path: google.maps.SymbolPath.CIRCLE,
                    fillColor:business_fill_color,
                    strokeColor: '#ff0c0c',
                    strokeWeight: 1,
                    fillOpacity: 10,
                    scale: 5
                },
                clickable: true,
                labelContent: business_name,
                labelAnchor: new google.maps.Point(50, 0),
                labelClass: "map_labels", // the CSS class for the label
                labelStyle: {opacity: 1}
            });
            
            bounds.extend(new_marker.getPosition());
            supplier_markers.push(new_marker);
            google.maps.event.addListener(new_marker, 'click', (function(new_marker, i) {
                return function() {
                    if(business_array[i]['business_type']!='port'){
                        var business_content = '<div class="noscrollbar"><a target="_blank" href="single.php?id='+business_array[i]['business_id']+'">'+business_array[i]['business_name']+'</a></div>';
                    }else{
                        var business_content = '<div class="noscrollbar"><span>'+business_array[i]['port_name']+'</span></div>';
                    }
                    infowindow.setContent(business_content);
                    infowindow.open(map, new_marker);
                }
            })(new_marker, i));

        }
        //markerCluster.setMap(null);
        /*var styles= [{
                        height: 53,
                        url: "images/markerclusterer/m1.png",
                        width: 53
                        },
                        {
                        height: 56,
                        url: "images/markerclusterer/m1.png",
                        width: 56
                        },
                        {
                        height: 66,
                        url: "images/markerclusterer/m1.png",
                        width: 66
                        },
                        {
                        height: 78,
                        url: "images/markerclusterer/m1.png",
                        width: 78
                        },
                        {
                        height: 90,
                        url: "images/markerclusterer/m1.png",
                        width: 90
                    }];*/
        markerCluster.clearMarkers();
        markerCluster.addMarkers(supplier_markers);
        markerCluster.setGridSize(50);
        //markerCluster.setStyles(styles);
        map.fitBounds(bounds);
        $('#supplier_count').text(data['count']);
    },'json');
    
}
function showMarkers(marker_array){
    setAllMap(marker_array, map);
}
function clearMarkers(marker_array) {
    setAllMap(marker_array, null);
}
function setAllMap(marker_array, map) {
  for (var i = 0; i < marker_array.length; i++) {
    marker_array[i].setMap(map);
  }
}
function toggle_name(){
    if($('#show_name_checkbox').is(":checked")){
        $('.map_labels').show();
    }else{
        $('.map_labels').hide();
    }
    
}
function initialize() {
    
    var mapProp = {
        //center:new google.maps.LatLng(51.508742,-0.120850),
        zoom:15,
        minZoom:3,
        mapTypeId:google.maps.MapTypeId.ROADMAP,
        panControl: true,
        panControlOptions: {
            position: google.maps.ControlPosition.TOP_RIGHT
        },
        zoomControl: true,
        zoomControlOptions: {
            style: google.maps.ZoomControlStyle.DEFAULT,
            position: google.maps.ControlPosition.RIGHT_CENTER
        },
        streetViewControl: false
    };
    map=new google.maps.Map(document.getElementById("map_canvas"),mapProp);
    //var mcOptions = {gridSize: 50, maxZoom: 15};
    markerCluster = new MarkerClusterer(map);
    var input = document.getElementById('google_address');
    var autocomplete = new google.maps.places.Autocomplete(input);
    autocomplete.bindTo('bounds',map);
    var marker = new google.maps.Marker({
        map: map,
        anchorPoint: new google.maps.Point(0, -29)
    });
    google.maps.event.addListener(autocomplete, 'place_changed', function() {
        infowindow.close();
        marker.setVisible(false);
        var place = autocomplete.getPlace();
        if (!place.geometry) {
          return;
        }

        // If the place has a geometry, then present it on a map.
        if (place.geometry.viewport) {
          map.fitBounds(place.geometry.viewport);
        } else {
          map.setCenter(place.geometry.location);
          map.setZoom(12);  // Why 17? Because it looks good. 12 looks better....
        }
        marker.setIcon(  ({
          url: place.icon,
          size: new google.maps.Size(71, 71),
          origin: new google.maps.Point(0, 0),
          anchor: new google.maps.Point(17, 34),
          scaledSize: new google.maps.Size(35, 35)
        }));
        marker.setPosition(place.geometry.location);
        marker.setVisible(true);
        
       
        var address = '';
        if (place.address_components) {
          address = [
            (place.address_components[0] && place.address_components[0].short_name || ''),
            (place.address_components[1] && place.address_components[1].short_name || ''),
            (place.address_components[2] && place.address_components[2].short_name || '')
          ].join(' ');
        }

        google.maps.event.addListener(marker, 'click', (function(marker) {
                return function() {
                  infowindow.setContent('<div><strong>' + place.name + '</strong><br>' + address);
                  infowindow.open(map, marker);
                }
            })(marker));
    });
    /*$('#map_canvas').gmap3({
        map:{
            options:{
                //center:new google.maps.LatLng(51.508742,-0.120850),
                zoom:15,
                minZoom:3,
                mapTypeId:google.maps.MapTypeId.ROADMAP,
                panControl: true,
                panControlOptions: {
                    position: google.maps.ControlPosition.TOP_RIGHT
                },
                zoomControl: true,
                zoomControlOptions: {
                    style: google.maps.ZoomControlStyle.DEFAULT,
                    position: google.maps.ControlPosition.RIGHT_CENTER
                },
                streetViewControl: false
            }
        }
    });*/
   /* var options = {
        enableHighAccuracy: true,
        timeout: 5000,
        maximumAge: 0
    };*/
    /*
    if(navigator.geolocation){
        navigator.geolocation.getCurrentPosition(function(position){
            var pos = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);
            var infowindow = new google.maps.InfoWindow({
                map: map,
                position:pos,
                content: 'Location found using HTML5'
            });
            map.setCenter(pos);
        },function(){
            handleNoGeolocation(true);
        },options);
    }else{
        alert("Your browser doesn't support Geolocation");
    }
    */
   /* google.maps.event.addListener(map, 'bounds_changed', function(){
        bounds = map.getBounds();
        ne = bounds.getNorthEast();
        sw = bounds.getSouthWest();
        console.log("NorthEast"+ne+"SouthWest"+sw);
    });*/
    
}
function handleNoGeolocation(errorFlag){
    if(errorFlag){
        var content = 'Error: THe Geolocation service failed.';
    } else {
        var content = 'Error: Your browser doesn\'t suppport geolocation.';
    }
    var options = {
        map: map,
        position: new google.maps.LatLng(60, 105),
        content: content
    };
    var infowindow = new google.maps.InfoWindow(options);
    map.setCenter(options.position);
}
/*
 * Let google map keep its center when user is resizing the window
 * 
 * @param {type} param1
 * @param {type} param2
 * @param {type} param3
 */
google.maps.event.addDomListener(window, "resize", function() {
    var center = map.getCenter();
    google.maps.event.trigger(map, "resize");
    map.setCenter(center); 
});

function show_menu(arg){
    /*$('#'+arg).css('background-color','#00adef');
    $('#'+arg).siblings().css('background-color', '#fff');*/
    var target = $('#home_menu_'+arg);
    var all_hidden = $('.hidden_menu');
    if(target.hasClass('selected')){
        target.removeClass('selected');
        //target.children().children().attr('src','images/'+arg+'1_icon.png');
    }else{
        target.addClass('selected');
        //target.children().children().attr('src','images/'+arg+'2_icon.png');
        target.siblings().removeClass('selected');
        var args = ['search','filter','layers'];
        target.siblings().each(function (idx, el) {
            for(i=0;i<args.length;i++){
                if(el.id.indexOf(args[i])>-1){
                    //$('#'+el.id).children().children().attr('src','images/'+args[i]+'1_icon.png');
                    break;
                }
            }
        });
    }
    var selected_id = $('#home_menu').children('.selected').attr('id');
    if(typeof selected_id != "undefined"){
        var selectd_hidden = $('#hidden_'+selected_id);
        selectd_hidden.siblings().animate({"left":"-1000px"}, 100).removeClass('visible');
        if (selectd_hidden.hasClass('visible')){
            selectd_hidden.animate({"left":"-1000px"}, 200).removeClass('visible');
        } else {
            selectd_hidden.animate({"left":"0px"}, 200).addClass('visible');
        }
    }else{
        
            if(arg=='search'){
                var keyword = $('#keyword').val().trim();
                var country = $('#country').val().trim();
                
                if(keyword.length>0 || country.length>0){
                    
                    target.addClass('not_empty');
                }else{
                    target.removeClass('not_empty');
                }
            }
            if(arg=='filter'){
                var category = $('#category_select').val();
                var chkArray = [];
                /* look for all checkboes that have a parent id called 'checkboxlist' attached to it and check if it was checked */
                $("#sub_category_checkbox_area input:checked").each(function() {
                    chkArray.push($(this).val());
                });
                if(category!='Select Category'||chkArray.length>0){
                    target.addClass('not_empty');
                }else{
                    target.removeClass('not_empty');
                }
            }
        all_hidden.animate({"left":"-1000px"}, 100).removeClass('visible');
    }
        
                      //$('#home_menu_'+arg).children().children().attr('src','images/'+arg+'2_icon.png');
    //target.siblings().removeClass('selected');
    //$('#home_menu_'+arg).siblings().children().children().attr('src','images/'+arg+'1_icon.png');
    
}

function populate_category_dropdown(){
    for(i=0; i<category_array.length;i++){
        //console.log(category_array[i]);
        $('#category_select').append('<option>'+category_array[i]+'</option>');
    }
    /*$('#category_select').on('change',function(){
        var subcategory_array = get_subcategory_array(this.value);
        $('#sub_category_checkbox_area').empty();
        for(i=0; i<subcategory_array.length;i++){
            var checkbox_html = '<label class="checkbox-inline"><input type="checkbox" value="'+subcategory_array[i]+'">'+subcategory_array[i]+'</label>';
            $('#sub_category_checkbox_area').append(checkbox_html);
            
        }
    });*/
}

function get_subcategory_array(category_name){
    for(var index in raw_category_array){
        for(property in raw_category_array[index]){
            if(property===category_name){
                return (raw_category_array[index][property]);
            }

        }
    }
}

function populate_layer_checkbox(){
    $('#port_layer_checkbox').change(
        function(){
            if(!$(this).is(':checked')){
                clearMarkers(port_markers);
            }else{
                showMarkers(port_markers);
            }
        });
}