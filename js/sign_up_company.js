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
    }else{
        var marker_position = new google.maps.LatLng(60, 105);
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