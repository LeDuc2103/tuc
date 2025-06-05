// Google Map
function initMap() {
    var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 10,
        center: {lat: 38.897957, lng: -77.036560}
    });

    var image = 'assets/images/icons/map-marker.png';

    var beachMarker = new google.maps.Marker({
        position: {lat: 38.897957, lng: -77.036560},
        map: map,
        icon: image
    });
}