<?php
/*conn to db */
require_once 'db_connect.php';


/* get first state array */
$str = file_get_contents('trip.txt');
$arr = unserialize($str);

/* add th enew changes */
$place = $_GET["place"];
array_push($arr, $place);


/*write to the file the serilized array*/
$myfile = fopen("trip.txt", "w");
fwrite($myfile, serialize($arr));
fclose($myfile);


/*insert to db */
if(isset($_COOKIE["UserId"])){
$user_id = $_COOKIE['UserId'];
$trip = serialize($arr);

$stmd = $conn->prepare("INSERT INTO trip (user_id, trip_sum) VALUES (:userid, :trip)");
$stmd->bindParam(":userid", $user_id);
$stmd->bindParam(":trip", $trip);

$stmd->execute();


/*Redirect to home page*/
header("Location: index.php"); 
}
else{
header("Location: login.php?error=1"); 
}


?>