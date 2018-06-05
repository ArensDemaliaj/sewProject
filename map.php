<script>

    function initMap(<?php echo $var; ?> ,var _lat,var _lng, var _place) {

    var options = {
        zoom: 13,
        center: {lat: 42.0693, lng: 19.5033}
    }
    
    var map = new google.maps.Map(document.getElementById('map'),options);

    addMarker({
        coords:{lat: _lat, lng: _lng},
        content: 
        '<button type="button" class="btn btn-primary" onclick="addToArray();" > <a href="addToArray.php?place=_place"> Add this place</button>'
    });
    
    //Add Marker Funktion

    function addMarker(props){
        var marker = new google.maps.Marker({
        position: props.coords,
        map: map
        });
    

        if(props.content){
        var infoWindow = new google.maps.InfoWindow({
            content:props.content
            });

        marker.addListener('click', function(){
            infoWindow.open(map, marker);
        });
        }
    }

    }

    function addToArray() {
        window.location.href='addToArray.php?place=shkoder';
    }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key= AIzaSyBCgoc2A07OOwHvN8fFW1wmqlq-SHYloKc &callback=initMap">
    </script>
