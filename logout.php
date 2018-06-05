<?php 
setcookie("email", $_POST["email"], time()-3600*24*7); 
setcookie("admin", $_POST["email"], time()-3600*24*7); 
header("Location: index.php");
?>