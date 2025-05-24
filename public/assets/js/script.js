$(function(){
    "use strict"
    $("#dataTable").dataTable();

    $(".select2").select2();

    $(document).on("change", ".selChange", function(){
        let dis = $(this);
        let typeId = dis.val();
        let give = dis.data('give');
        let take = dis.data('take');
        $.ajax({
            type: 'GET',
            data: {"typeId": typeId, "give": give, "take": take},
            url: '/ajax/get/ddl',
            success: function (res) {              
                var xdata = $.map(res.items, function (obj) {
                    obj.text = obj.name || obj.id;
                    return obj;
                });
                if(take == 'religion'){                    
                    $('.selReligion').html("<option value=''>Select</option>").select2({
                        data: xdata,
                    });                   
                }                   
                if(take == 'caste'){
                    $('.selCaste').html("<option value=''>Select</option>").select2({
                        data: xdata,
                    });
                }
                if(take == 'subcaste'){
                    $('.selSubCaste').html("<option value=''>Select</option>").select2({
                        data: xdata,
                    });
                }
            },
            error: function (err) {
                console.log(err)
            }
        });   
    });
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

/*function initMap() {
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
}*/