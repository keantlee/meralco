// Multiple Markers on Database
// var location_markers = {!! json_encode( $markers ) !!};

function initMap() {
    // Create new bounds based on a southwest and a northeast corner
    var bounds = new google.maps.LatLngBounds();

    // mapOptions like "zoom, OR type of map: [1] roadmap, [2] satellite"
    var mapOptions = {
        mapTypeId: "satellite"
    };

    // Display a map on the page
    map = new google.maps.Map(document.getElementById("map"), mapOptions);
    // setTilt ->
    map.setTilt(45);

    var greenIconMarker = {
        url: "http://maps.google.com/mapfiles/ms/icons/green-dot.png"
    };
    var redIconMarker = {
        url: "http://maps.google.com/mapfiles/ms/icons/red-dot.png"
    };
    var customIconMarker = 31;

    for (let i = 0; i < location_markers.length; i++) {
        try {
            var loc_LatLong = new google.maps.LatLng(location_markers[i].latitude,location_markers[i].longitude);
            //  Extend the bounds with the last marker position
            bounds.extend(loc_LatLong);

            var title = location_markers[i].name;

            // if (customIconMarker >= 30) {
            //     var marker = new google.maps.Marker({
            //         position: loc_LatLong,
            //         map: map,
            //         title: title,
            //         icon: redIconMarker
            //     });
            // }

            var marker = new google.maps.Marker({
                position: loc_LatLong,
                map: map,
                title: title,
                icon: greenIconMarker
            });

            // Info Window Content
            var contentString =
                '<div id="markerContent">' +
                    "<p id='site_id' data-id='"+ location_markers[i].id  +"' hidden>' </p>" +
                    '<h1 id="contentHeading" class="contentHeading">' + location_markers[i].ip_address + "</h1>" +
                    "<p><b>Name: </b>" + location_markers[i].name + "</p>" +
                    "<p><b>Address: </b>" + location_markers[i].address + "</p>" +
                    // "<p><b>Latitude: </b>" + location_markers[i].latitude + "</p>" +
                    // "<p><b>Longitude: </b>" + location_markers[i].longitude + "</p>" +
                    "<p><b>Status: </b>" + "null" + "</p>" +
                    "<a href='/dashboard/site_datalog"+  "/" + location_markers[i].id + " ' " + "class='view_btn_site btn btn-outline-primary btn-sm' id='view_btn_site'>View</a>"
                "</div>";


            // Allow each marker to have an infoWindow
            var infowindow = new google.maps.InfoWindow();
            google.maps.event.addListener(
                marker,
                "click",
                (function(marker, contentString, infowindow) {
                    return function() {
                        infowindow.setContent(contentString);
                        infowindow.open(map, marker);
                    };
                })(marker, contentString, infowindow)
            );

            /** Automatically center the map fitting all markers on the screen and
             * display the area between the location southWest and northEast.
             **/
            map.fitBounds(bounds);
        } catch (err) {
            console.log("No location found on database!");
        }
    }
}
