
<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyBYORzYj-KDyeRIWGey5paMtaDtDqesTgA"></script>
<?php
    require_once 'db_connect.php';
?>
<script type="text/javascript">
    var locations = [

        <?php 
         $sql = "SELECT lat, lng, description FROM maps_point";

         $result = $conn->query($sql);
         
         foreach ($result as $row) {

            echo "['" . $row['description'] . "', " . $row['lat'] . ", " . $row['lng'] . "],"; 
         }
        ?>
        //last location needs to be fix because it doesnt have a comma @the end
        ['<a href="addToArray.php?place=Kazakistan">Hey</a>', -33.950198, 151.259302, 1]
    ];

    var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 10,
        center: new google.maps.LatLng(41.3305,19.8156),
        mapTypeId: google.maps.MapTypeId.ROADMAP
    });

    var infowindow = new google.maps.InfoWindow();

    var marker, i;

    for (i = 0; i < locations.length; i++) {  
        marker = new google.maps.Marker({
        position: new google.maps.LatLng(locations[i][1], locations[i][2]),
        map: map
        });

        google.maps.event.addListener(marker, 'click', (function(marker, i) {
        return function() {
            infowindow.setContent(locations[i][0]);
            infowindow.open(map, marker);
        }
        })(marker, i));
    }
</script>

