<?php

if (isset($_POST["email"])) {
   require_once 'db_connect.php';
    
    $email = $_POST['email'];
    
    $stmd = $conn->prepare("SELECT id password FROM user WHERE email = :email;");

    $stmd->bindParam(":email", $email);
    $stmd->execute(); 

    $result = $stmd->fetchAll(PDO::FETCH_ASSOC);

    if(isset($result))
    {
        $str = "0123456789qwertzuioplkjhgfdsayxcvbnm";
        $str = str_shuffle($str);
        $str = substr($str, 0, 10);
        $url = "http://visitalbania.org/reset.php?token=$str&email=$email";

        mail($email, "Reset password", "To reset your password, please visit this: $url", "From: resetpassword@visitalbania.org\r\n");

        $conn->query("UPDATE user SET token='$str' WHERE email='$email'");

        $success = true;
    } else {
        echo "Please check your inputs!";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Visit Albania</title>

        <!-- Bootstrap core CSS -->
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="css/full-slider.css" rel="stylesheet">


        <style>
            #main_sec{
                /*margin to make difference with the top bar*/
                margin-top: 15%;
                border-radius:50px;
                /*difference inside div*/
                padding:5%;
                background: rgba(255,255,255,0.35);

            }
            body{
                background-image: url("https://www.stratton.com/-/media/stratton/images/summer/2400x1350/activities/golf/summer/2015-16/161021_summer_golf_2400x1350_28.ashx?h=1350&w=2400&hash=A9E938E3FB80D1EB347639DC5538CCD3B66D3EF2");             
            }
            
        </style>

    </head>
    
    <body>
            <?php 
            include_once 'menu.php';
            ?>
    

            <section>				
                <div id="main_sec" class="col-lg-6 offset-lg-3 col-md-6 offset-md-3 col-sm-12">
                <?php
                if($success == true){
                    echo "<h4>Check your email</h4>";
                    $success = false;
                }
                ?>
                    <form class="inline" id="contactForm" method="post" action="forget.php">

                        <div class="form-group">
                            <input type="email" name="email" class="form-control custom-labels" id="email" placeholder="EMAIL" required data-validation-required-message="Please write your email!"/>            
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-md btn-noborder-radius btn-custom" name="submit">Reset</button>
                        </div>

                    </form>
                </div>
            </section>
    </body>
</html>
