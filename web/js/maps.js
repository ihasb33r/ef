
var addmap = function(id,lat, lng, ttl, name, phone) {
    var latlng = new google.maps.LatLng(lat, lng);
    directionsService = new google.maps.DirectionsService();
    directionsDisplay = new google.maps.DirectionsRenderer();
    var myOptions = {
        zoom: 15,
        center: latlng,
        mapTypeId: google.maps.MapTypeId.ROADMAP,
        mapTypeControl: false
    };
    var map = new google.maps.Map(document.getElementById(id),myOptions);
    var marker = new google.maps.Marker({
        position: latlng, 
        map: map, 
        title: ttl
    }); 
    var contentString ="<h5>"+name+"</h5><h6>"+ttl+"</h6><h6>"+phone+"</h6>";
    var infowindow = new google.maps.InfoWindow({
        content: contentString
    });
    google.maps.event.addListener(marker, 'click', function() {
        infowindow.open(map,marker);
    });

}
$(document).ready(function(){
var map;
    map = new GMaps({
        div: '#map',
        lat: -12.043333,
        lng: -77.028333
    });

    function findlnglat(){
var myaddress = $('#form_address').val() + ", " + $("#form_postalcode").val() + "," + $("#form_town").val()
    console.log(myaddress);
        GMaps.geocode({
          address: myaddress, 
          callback: function(results, status) {
        console.log(status);
        console.log(results);
            if (status == 'OK') {
              var latlng = results[0].geometry.location;
              map.setCenter(latlng.lat(), latlng.lng());
              map.addMarker({
                lat: latlng.lat(),
                lng: latlng.lng()
              });
              $("#form_longitude").attr("value",latlng.lng());
              $("#form_latitude").attr("value",latlng.lat());
            }
          }
});

    }
    $("#form_town").blur( findlnglat);
    $("#form_address").blur(function(){
        findlnglat();
    });

    $("#form_postalcode").blur(function(){
        findlnglat();
    });
});

