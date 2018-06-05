<?php
    require_once 'db_connect.php';

        ?>
<script>

    
    function initMap(_lat, _lng) {

    var options = {
        zoom: 13,
        center: {lat: 43, lng: 23}
    }
    
    var map = new google.maps.Map(document.getElementById('map'),options);

  
    
    addMarker({
        coords:{lat: _lat, lng: _lng},
        content: 
        '<button type="button" class="btn btn-primary" onclick="addToArray();" >Add this place</button>'
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


    <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyBYORzYj-KDyeRIWGey5paMtaDtDqesTgA"></script>

    <script>
    initMap(43, 23);
    initMap(43.5, 23.5);
    </script>
<?php
/*
$sql = "SELECT * FROM maps_point";

$result = $conn->query($sql);
foreach($result as $row)
        {
        


        

?>
    initMap
    (
        <? echo $row['lat'];?>,
        <? echo "23";?>
    );
     alert('aro');
     
<?php
        }
?>
*/
</script>