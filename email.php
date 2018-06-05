<?php

$name = $email;
$email = $_GET["email"];


// Multiple recipients
$to = $email; // note the comma

// Subject
$subject = 'Registration succesful on visitalbania.com';



// Message
$message = '
<html>
<head>
  <title>Registration succesful on visitalbania.com</title>
</head>
<body>
  <h2>Hello ' . $name .  '</h2>
  <br>
  <h4>
    Thank you for registering in visitalbania.org.
    Now you can start booking your holidays.
  <h4>
  <br>
  <h4>All the best<h4>
  <p>Bledar Bukaqeja</p>
  <p>CEO of visitalbania.org </p>
</body>
</html>
';

// To send HTML mail, the Content-type header must be set
$headers[] = 'MIME-Version: 1.0';
$headers[] = 'Content-type: text/html; charset=iso-8859-1';

// Additional headers
$headers[] = 'To:' . $name .  '' . $email . '';
$headers[] = 'From: visitalbania <visitalbania@gmail.com>';

// Mail it
mail($to, $subject, $message, implode("\r\n", $headers));

header("Location: index.php");

?>