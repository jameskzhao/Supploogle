/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
var bounds;
var ne;
var sw;
var listings;
var map;
var supplier_markers = [];
var port_markers = [];
var infowindow = new google.maps.InfoWindow({maxWidth:320});

var supplier_map;
var supplier_marker;
var supplier_marker_position = new google.maps.LatLng(-33, 151);

var step_1_fields=['business_name', 'business_address', 'business_country', 'lat', 'lng', 'business_category'];
var step_2_fields=['payment_term_ytd', 'payment_term_1_year_ago', 'payment_term_2_years_ago', 'payment_term_3_years_ago','payment_term_4_years_ago',
                   'lead_time_ytd','lead_time_1_year_ago','lead_time_2_years_ago','lead_time_3_years_ago','lead_time_4_years_ago',
                   'ppm_ytd','ppm_1_year_ago','ppm_2_years_ago','ppm_3_years_ago','ppm_4_years_ago',
                   'ottr_ytd','ottr_1_year_ago','ottr_2_years_ago','ottr_3_years_ago','ottr_4_years_ago',
                   'ppv_ytd','ppv_1_year_ago','ppv_2_years_ago','ppv_3_years_ago','ppv_4_years_ago',
                   'part_variety_ytd','part_variety_1_year_ago','part_variety_2_years_ago','part_variety_3_years_ago','part_variety_4_years_ago',
                   'part_quantity_ytd','part_quantity_1_year_ago','part_quantity_2_years_ago','part_quantity_3_years_ago','part_quantity_4_years_ago',
                   'spend_ytd','spend_1_year_ago','spend_2_years_ago','spend_3_years_ago','spend_4_years_ago',
                   'shipment_frequency_ytd','shipment_frequency_1_year_ago','shipment_frequency_2_years_ago','shipment_frequency_3_years_ago','shipment_frequency_4_years_ago',
                   'score_ytd','score_1_year_ago','score_2_years_ago','score_3_years_ago','score_4_years_ago',
                   'strategy_by_product','strategy_by_company'];
var add_supplier_post_data = new Object;

function show_default_phase(){
    $('#phase_1').show();
    $('#phase_2').hide();
    $('#save_supplier_button').html('Next Step');
    $('#save_supplier_button').on('click', continue_to_phase_2);
    
}

function continue_to_phase_2(){
    
    for(i=0; i<step_1_fields.length; i++){
        var temp_field = step_1_fields[i];
        var temp_value = $('#'+temp_field).val().trim();
        if(temp_value.length>0){
            add_supplier_post_data[temp_field]=temp_value;
        }else{
            alert("All fields are required. "+temp_field+" information is missing");
            return;
        }
    }
    console.info(add_supplier_post_data);
    $('#phase_1').hide();
    $('#phase_2').show();
    $('#save_supplier_button').html('Submit');
    $('#save_supplier_button').off('click').on('click', add_supplier);
}

function add_supplier(){
    
    for(i=0; i<step_2_fields.length; i++){
        var temp_field = step_2_fields[i];
        var temp_value = $('#'+temp_field).val();
        if(temp_value.length>0){
            add_supplier_post_data[temp_field]=temp_value;
        }
    }
    $.post('php/add_supplier.php', add_supplier_post_data, add_supplier_return,"json");
    
}
function add_supplier_return(){
    var return_data = arguments[0];
    alert(return_data['return_message']);
    location.reload(); 
}
$( document ).ready(function() {
    initialize();
    get_suppliers();
    populate_category_dropdown();
    //populate_layer_checkbox();
    
});


function pop(){
    $('#screen').css({"display": "block", opacity: 0.7, position: "absolute", top: 0, right: 0, bottom: 0, left: 0});
    $('#box').css({"display": "block"}).click(function(){$(this).css("display", "none");$('#screen').css("display", "none")});
}




$('#myModal').on('shown.bs.modal', function () {
    google.maps.event.trigger(supplier_map, "resize");
    supplier_map.setCenter(supplier_marker_position);
});

function initialize_supplier_map(){
    var supplier_latitude = $('#lat').val().trim();
    var supplier_longitude = $('#lng').val().trim();
    if(supplier_latitude.length>0&&supplier_longitude.length>0){
        supplier_marker_position = new google.maps.LatLng(supplier_latitude, supplier_longitude);
    }
    var mapOptions = {
          center: supplier_marker_position,
          zoom: 12,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        };
     
    supplier_map=new google.maps.Map(document.getElementById("company_map"),mapOptions);
    
    supplier_marker = new google.maps.Marker({
        map: supplier_map,
        draggable:true,
        animation: google.maps.Animation.DROP,
        position: supplier_marker_position
    });
    google.maps.event.addListener(supplier_marker, 'dragend', function() {
            var latitude = this.position.lat().toFixed(8);
            var longitude = this.position.lng().toFixed(8);
            $('#lat').val(latitude);
            $('#lng').val(longitude);
        });  
}

function codeAddress() {
  var geocoder = new google.maps.Geocoder();
  var address = document.getElementById('business_address').value;
  if(address.length>0){
      geocoder.geocode( { 'address': address}, function(results, status) {
        if (status === google.maps.GeocoderStatus.OK) {

            supplier_marker.setVisible(false);
            supplier_map.setCenter(results[0].geometry.location);
            supplier_marker = new google.maps.Marker({
                map: supplier_map,
                draggable:true,
                animation: google.maps.Animation.DROP,
                position: results[0].geometry.location
            });
            var latitude = supplier_marker.position.lat().toFixed(8);
            var longitude = supplier_marker.position.lng().toFixed(8);
            $('#lat').val(latitude);
            $('#lng').val(longitude);
            google.maps.event.addListener(supplier_marker, 'dragend', function() {
                var latitude = this.position.lat().toFixed(8);
                var longitude = this.position.lng().toFixed(8);
                $('#lat').val(latitude);
                $('#lng').val(longitude);
            });
        } else {
          alert('Geocode was not successful for the following reason: ' + status);

        }
      });
  }
  
  
}
function save_profile(){
    var business_id = $('#business_id').val().trim();
    var business_name = $('#business_name').val().trim();
    var business_address = $('#business_address').val().trim();
    var business_country = $('#business_country').val().trim();
    var business_category = $('#business_category').val().trim();
    var lat = $('#lat').val().trim();
    var lng = $('#lng').val().trim();
    var post_data = new Object;
    post_data['business_id']=business_id;
    post_data['business_name']=business_name;
    post_data['business_address']=business_address;
    post_data['business_country']=business_country;
    post_data['business_category']=business_category;
    post_data['lat']=lat;
    post_data['lng']=lng;
    if(business_id.length>0&&business_name.length>0&&business_address.length>0&&business_country.length>0&&business_category.length>0&&lat.length>0&&lng.length>0){
        $.post('php/save_business.php',post_data,save_business_return,"json");
    }else{
        if(business_category.length==0){
            alert("Business category is required to save your business");
        }
    }
}
function save_business_return(){
    var return_data = arguments[0];
    alert(return_data['return_message']);
}



/*var markers = {
    '3528Vanness':[49.236958, -123.029286],
    '7800Bennett':[49.161017, -123.139208]
}*/



function update_map(){
    var keyword = $('#keyword').val().trim();
    //var city = $('#location').val().trim();
    var category = $('#category_select').val();
    console.log(category);
    get_suppliers(keyword,category);
    //var chkArray = [];
    /* look for all checkboes that have a parent id called 'checkboxlist' attached to it and check if it was checked */
    /*$("#sub_category_checkbox_area input:checked").each(function() {
	chkArray.push($(this).val());
    });*/
    //console.info(chkArray);
    //get_suppliers(keyword, city,category,chkArray);
    
}
function reset_filters(){
     $('#sub_category_checkbox_area input:checkbox').removeAttr('checked');
     $("#category_select").val($("#category_select option:first").val());
     $("#sub_category_checkbox_area").empty();
     update_map();
}
function reset_keywords(){
    $('#keyword').val('');
    $('#location').val('');
    update_map();
}
function get_ports(){
    var ports_array;
    $.post('../php/get_ports.php','',function(data){
        ports_array=data['ports_array'];
        
        for(i=0; i<ports_array.length;i++){
            var port_data = ports_array[i];
            var lat_lng = new google.maps.LatLng(port_data.lat, port_data.lng);
            var new_marker = new google.maps.Marker({
                position:lat_lng,
                map:map,
                icon:'images/shipwreck.png'
            });
            port_markers.push(new_marker);
            //var port_markerCluster = new MarkerClusterer(map, port_markers);
            google.maps.event.addListener(new_marker, 'click', (function(new_marker, i) {
                return function() {
                  infowindow.setContent('<div class="noscrollbar"><span>'+ports_array[i]['port_name']+'</span></div>');
                  infowindow.open(map, new_marker);
                }
            })(new_marker, i));
        }
    },'json');
}
function get_suppliers(keyword, category){
    var supplier_array;
    var bounds = new google.maps.LatLngBounds();
    var post_data = new Object;
    post_data['keyword']=keyword;
    
    post_data['category']=category;
    
    
    $.post('php/get_customer_supplier.php',post_data, function(data){
        supplier_array = data['supplier_array'];
        //console.info(supplier_array);
        clearMarkers(supplier_markers);
        console.info(supplier_array);
        if(supplier_array.length==0){
            //There is no supplier in the database. Remind customer to add one.
            pop();
        }else{
            for(i=0; i<supplier_array.length; i++){
                var dataPhoto = supplier_array[i];
                var lat_lng = new google.maps.LatLng(dataPhoto.lat, dataPhoto.lng);
                var new_marker = new google.maps.Marker({
                    position:lat_lng,
                    map:map,
                    icon:'images/factory.png'
                });
                bounds.extend(new_marker.getPosition());
                supplier_markers.push(new_marker);
                google.maps.event.addListener(new_marker, 'click', (function(new_marker, i) {
                    return function() {
                      infowindow.setContent('<div class="noscrollbar"><a target="_blank" href="single.php?id='+supplier_array[i]['business_id']+'">'+supplier_array[i]['business_name']+'</a></div>');
                      infowindow.open(map, new_marker);
                    }
                })(new_marker, i));

            }
            map.fitBounds(bounds);
        }
        
        //var markerCluster = new MarkerClusterer(map, supplier_markers);
        
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
function initialize() {
    
    var mapProp = {
        center:new google.maps.LatLng(51.508742,-0.120850),
        zoom:12,
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
    var options = {
        enableHighAccuracy: true,
        timeout: 5000,
        maximumAge: 0
    };
    if(navigator.geolocation){
        navigator.geolocation.getCurrentPosition(function(position){
            var pos = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);
            map.setCenter(pos);
        },function(){
            handleNoGeolocation(true);
        },options);
    }else{
        alert("Your browser doesn't support Geolocation");
    }
    
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
                //var location = $('#location').val().trim();
                
                if(keyword.length>0 || location.length>0){
                    console.log(keyword);
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