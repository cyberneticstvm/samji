$(function(){
    "use strict"
    $("#dataTable").dataTable();
});

var options = {
    componentRestrictions: {
        country: "in"
    }
};
window.addEventListener('load', initialize);

function initialize() {
    var input = document.getElementById('choose_location');
    var autocomplete = new google.maps.places.Autocomplete(input, options);
    autocomplete.addListener('place_changed', function() {
        var place = autocomplete.getPlace();
        $('#location_lat').val(place.geometry['location'].lat());
        $('#location_lng').val(place.geometry['location'].lng());
    });
}

function initMap() {
    navigator.geolocation.getCurrentPosition(
        function(position) {
            var addr = getUserAddressBy(position.coords.latitude, position.coords.longitude);
        },
        function errorCallback(error) {
            console.log(error)
        }
    );
}

function getUserAddressBy(lat, long) {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            var address = JSON.parse(this.responseText)
            var addr = address.results[0].formatted_address;
            document.getElementById('address').value = addr;
            $('#latitude').val(lat);
            $('#longitude').val(long);
        }
    };
    xhttp.open("GET", "https://maps.googleapis.com/maps/api/geocode/json?latlng=" + lat + "," + long + "&key={{config('app.google_api_key')}}", true);
    xhttp.send();
}