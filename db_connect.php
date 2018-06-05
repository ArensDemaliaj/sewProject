<?php
$servername = "atenza.websitewelcome.com";
$username = "visitalb_arens";
$password = "arensidem";

try {
    $conn = new PDO("mysql:host=$servername;dbname=visitalb_database", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
?>