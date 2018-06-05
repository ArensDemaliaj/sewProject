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
    <?php
   
    ?>

            <section>				
                <div id="main_sec" class="col-lg-6 offset-lg-3 col-md-6 offset-md-3 col-sm-12">
                    <form class="inline" id="contactForm" method="post" action="user_register.php">
                        <div class="row">

                            <div class="col-sm-6 height-contact-element">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control custom-labels" id="name" placeholder="NAME" value="<?php if(isset($_SESSION['name'])){ echo $_SESSION['name']; $_SESSION['name']="";} ?>" required data-validation-required-message="Please write your name!"/>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>

                            <div class="col-sm-6 height-contact-element">
                                <div class="form-group">
                                    <input type="text" name="surname" class="form-control custom-labels" id="surname" placeholder="SURNAME" value="<?php if(isset($_SESSION['surname'])){ echo $_SESSION['surname']; $_SESSION['surname']="";} ?>" required data-validation-required-message="Please write your name!"/>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>

                            <div class="col-sm-12 height-contact-element">
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control custom-labels" id="email" placeholder="EMAIL" value="<?php if(isset($_SESSION['email'])){ echo $_SESSION['email']; $_SESSION['email']="";} ?>" required data-validation-required-message="Please write your email!"/>
                                    <p class="help-block text-danger"></p>
                                </div>
                                <?php
                                if(isset($_GET['fehler'])){
                                    if($_GET['fehler'] == 10){
                                        echo "<h3>Email already in use</h3>";
                                        $_GET['fehler'] = 0;
                                    }
                                }
                                ?>
                            </div>

                            <div class="col-sm-12 height-contact-element">
                                <div class="form-group">
                                    <input type="password" name="pwd" class="form-control custom-labels" id="pwd" placeholder="PASSWORD" value="<?php if(isset($_SESSION['password'])){ echo $_SESSION['password']; $_SESSION['password']="";} ?>" required data-validation-required-message="Please write a pasword!"/>
                                    <?php
                                        if(isset($_GET['falsch'])){
                                            if($_GET['falsch'] == 2){
                                                echo "<h3>Password must be laenger als 8 Zeichen</h3>";
                                                $_GET['falsch'] = 0;
                                            }
                                        }
                                    ?>
                                </div>
                            </div>

                            <div class="col-sm-12 height-contact-element">
                                <div class="form-group">
                                    <input type="password" name="cpwd" class="form-control custom-labels" id="cpwd" placeholder="PASSWORD" value="<?php if(isset($_SESSION['cpassword'])){ echo $_SESSION['cpassword']; $_SESSION['cpassword']="";} ?>" required data-validation-required-message="Please write a pasword!"/>
                                    <?php
                                        if(isset($_GET['falsch'])){
                                            if($_GET['falsch'] == 1){
                                                echo "<h3>Password must be laenger als 8 Zeichen</h3>";
                                                $_GET['falsch'] = 0;
                                            }
                                        }
                                    ?>
                                </div>
                            </div>

                            <div class="col-sm-3 col-xs-6 col-md-4 height-contact-element col-md-offset-4 height-contact-element">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-md btn-noborder-radius btn-custom" name="submit">SUBMIT
                                    </button>
                                </div>
                            </div>

                        </div>
                        
                    </form>
                </div>
            </section>
    </body>
</html>
