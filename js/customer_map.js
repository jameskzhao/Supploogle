/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
var supplier_map;
var supplier_marker;
var supplier_marker_position = new google.maps.LatLng(-33, 151);
$('#myModal').on('shown.bs.modal', function () {
    google.maps.event.trigger(supplier_map, "resize");
    supplier_map.setCenter(supplier_marker_position);
});

function initialize_supplier_map(){
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