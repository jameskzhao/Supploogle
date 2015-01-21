
var bounds;
var ne;
var sw;
var listings;
var map;
var markers = [];
var infowindow = new google.maps.InfoWindow({maxWidth:320});
/*var markers = {
    '3528Vanness':[49.236958, -123.029286],
    '7800Bennett':[49.161017, -123.139208]
}*/


$( document ).ready(function() {
    initialize();
    get_suppliers();
    populate_category_dropdown();
});
function update_map(){
    var keyword = $('#keyword').val().trim();
    var city = $('#location').val().trim();
    get_suppliers(keyword, city);
}
function get_suppliers(keyword, city, category, subcategories){
    var supplier_array;
    var bounds = new google.maps.LatLngBounds();
    var post_data = new Object;
    post_data['keyword']=keyword;
    post_data['city']=city;
    post_data['category']=category;
    post_data['subcategories']=subcategories;//should be an array
    
    $.post('php/get_supplier.php',post_data, function(data){
        supplier_array = data['supplier_array'];
        //console.info(supplier_array);
        clearMarkers();
        markers = [];
        for(i=0; i<supplier_array.length; i++){
            var dataPhoto = supplier_array[i];
            var lat_lng = new google.maps.LatLng(dataPhoto.lat, dataPhoto.lng);
            var new_marker = new google.maps.Marker({
                position:lat_lng,
                map:map
            });
            bounds.extend(new_marker.getPosition());
            markers.push(new_marker);
            google.maps.event.addListener(new_marker, 'click', (function(new_marker, i) {
                return function() {
                  infowindow.setContent('<a target="_blank" href="single.php?id='+supplier_array[i]['ID']+'">'+supplier_array[i]['supploogle_name']+'</a>');
                  infowindow.open(map, new_marker);
                }
            })(new_marker, i));

        }
        //var markerCluster = new MarkerClusterer(map, markers);
        map.fitBounds(bounds);
    },'json');
    
}
function clearMarkers() {
  setAllMap(null);
}
function setAllMap(map) {
  for (var i = 0; i < markers.length; i++) {
    markers[i].setMap(map);
  }
}
function initialize() {
    var mapProp = {
        //center:new google.maps.LatLng(51.508742,-0.120850),
        zoom:15,
        minZoom:2,
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
    var options = {
        enableHighAccuracy: true,
        timeout: 5000,
        maximumAge: 0
    };
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
    google.maps.event.addListener(map, 'bounds_changed', function(){
        bounds = map.getBounds();
        ne = bounds.getNorthEast();
        sw = bounds.getSouthWest();
        console.log("NorthEast"+ne+"SouthWest"+sw);
    });
    
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
        target.children().children().attr('src','images/'+arg+'1_icon.png');
    }else{
        target.addClass('selected');
        target.children().children().attr('src','images/'+arg+'2_icon.png');
        target.siblings().removeClass('selected');
        var args = ['search','filter','layers'];
        target.siblings().each(function (idx, el) {
            for(i=0;i<args.length;i++){
                if(el.id.indexOf(args[i])>-1){
                    $('#'+el.id).children().children().attr('src','images/'+args[i]+'1_icon.png');
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
        all_hidden.animate({"left":"-1000px"}, 100).removeClass('visible');
    }
        
                      //$('#home_menu_'+arg).children().children().attr('src','images/'+arg+'2_icon.png');
    //target.siblings().removeClass('selected');
    //$('#home_menu_'+arg).siblings().children().children().attr('src','images/'+arg+'1_icon.png');
    
}

function populate_category_dropdown(){
    for(i=0; i<category_array.length;i++){
        console.log(category_array[i]);
        $('#category_select').append('<option>'+category_array[i]+'</option>');
    }
    $('#category_select').on('change',function(){
        var subcategory_array = get_subcategory_array(this.value);
        $('#sub_category_checkbox_area').empty();
        for(i=0; i<subcategory_array.length;i++){
            var checkbox_html = '<label class="checkbox-inline"><input type="checkbox" value="'+subcategory_array[i]+'">'+subcategory_array[i]+'</label>';
            $('#sub_category_checkbox_area').append(checkbox_html);
            
        }
    });
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
