/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

var map;
var marker;
$( document ).ready(function() {
    initialize();
});
function initialize(){
    var map_lat = $('#lat').val().trim();
    var map_lng = $('#lng').val().trim();
    if(map_lat.length>0&&map_lng.length>0){
        var marker_position = new google.maps.LatLng(map_lat, map_lng);
    }
    
    var mapOptions = {
          center: marker_position,
          zoom: 10,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        };
     
    map=new google.maps.Map(document.getElementById("company_map"),mapOptions);
    
    marker = new google.maps.Marker({
        map: map,
        draggable:true,
        animation: google.maps.Animation.DROP,
        position: marker_position
    });
    if(map_lat.length==0||map_lng.length==0){
        var business_address = $('#business_address').val().trim();
        if(business_address.length>0){
            alert("Downloading Latitude and Longitude data from Google. Please remember to save");
            codeAddress();
        }
    }
    google.maps.event.addListener(marker, 'dragend', function() {
            var latitude = this.position.lat().toFixed(8);
            var longitude = this.position.lng().toFixed(8);
            $('#lat').val(latitude);
            $('#lng').val(longitude);
        });
    //codeAddress();
    google.maps.event.addListener(map, 'center_changed', function() {
        // 1 second after the center of the map has changed, pan back to the
        // marker.
        window.setTimeout(function() {
            map.panTo(marker.getPosition());
            }, 1000);
    });
    
}

function codeAddress() {
  var geocoder = new google.maps.Geocoder();
  var address = document.getElementById('business_address').value;
  if(address.length>0){
      geocoder.geocode( { 'address': address}, function(results, status) {
        if (status === google.maps.GeocoderStatus.OK) {

            marker.setVisible(false);
            map.setCenter(results[0].geometry.location);
            marker = new google.maps.Marker({
                map: map,
                draggable:true,
                animation: google.maps.Animation.DROP,
                position: results[0].geometry.location
            });
            var latitude = marker.position.lat().toFixed(8);
            var longitude = marker.position.lng().toFixed(8);
            $('#lat').val(latitude);
            $('#lng').val(longitude);
            google.maps.event.addListener(marker, 'dragend', function() {
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