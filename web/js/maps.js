
var addmap = function(id,lat, lng, ttl, name, phone) {
    var latlng = new google.maps.LatLng(lat, lng);
    directionsService = new google.maps.DirectionsService();
    directionsDisplay = new google.maps.DirectionsRenderer();
    var myOptions = {
        zoom: 4,
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
