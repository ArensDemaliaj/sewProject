<?php
require_once 'db_connect.php';
       
$email = $_POST['email'];
$password = $_POST['pwd'];

$stmd = $conn->prepare("SELECT id, name, surname, email, password FROM user WHERE email = :email;");

$stmd->bindParam(":email", $email);
$stmd->execute(); 

$result = $stmd->fetchAll(PDO::FETCH_ASSOC);
if(isset($result))
{
    $email = $result[0]["email"];
    $hash = $result[0]["password"];                        

    if (  password_verify( $password , $hash ) )
    {
        $value = $result[0]["name"] . " " . $result[0]["surname"];
        $id = $result[0]["id"];
        setcookie("email", $value, time()+3600*24*7, $path = "/");
        setcookie("UserId", $id, time()+3600*24*7, $path = "/");
        header("Location: index.php");
    }
    else
    {
        header("location: login.php?fehler=1");
    }
}
else
{
    header("location: login.php?fehler=1");
}
                 
?>