<?php 
setcookie("email", $_POST["email"], time()-3600*24*7);
setcookie("UserId", $_POST["email"], time()-3600*24*7); 
header("Location: index.php");
?>