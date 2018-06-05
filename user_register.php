<?php
session_start();
require_once 'db_connect.php';
$password = $_POST['pwd'];
$cpassword = $_POST['cpwd'];
$name = $_POST['name'];
$surname = $_POST['surname'];
$email = $_POST['email'];

if(!empty($password) && !empty($cpassword))
{
    if($password != $cpassword)
    {
        header("location: register.php?falsch=1");
        $_SESSION["name"] = $name;
        $_SESSION["surname"] = $surname;
        $_SESSION["email"] = $email;
        $_SESSION["password"] = $password;
        $_SESSION["cpassword"] = $cpassword;
        exit();
    }
}
if(strlen($password)<8)
{
    header("location: register.php?falsch=2");
    $_SESSION["name"] = $name;
    $_SESSION["surname"] = $surname;
    $_SESSION["email"] = $email;
    $_SESSION["password"] = $password;
    $_SESSION["cpassword"] = $cpassword;
    exit();
}
$name = $_POST['name'];   
$surname = $_POST['surname'];
$email = $_POST['email'];
$password = password_hash($_POST['pwd'], PASSWORD_DEFAULT);
$sql1 = "SELECT * FROM user WHERE email  = '$email';";
$result = $conn->query($sql1);
if (!empty($result))
{
    header("location: register.php?fehler=10");
} 
$stmd = $conn->prepare("INSERT INTO user (name, surname, email, password) VALUES (:name, :surname, :email, :password)");
$stmd->bindParam(":name", $name);
$stmd->bindParam(":surname", $surname);
$stmd->bindParam(":email", $email);
$stmd->bindParam(":password", $password);
$stmd->execute();

/*redirect to home*/


$value = $name . " " . $surname;
setcookie("email", $value, time()+3600*24*7, $path = "/");
header("Location: email.php?email=$email");

?>