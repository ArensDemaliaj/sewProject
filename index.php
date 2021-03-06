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
      #map {
        height: 750px;
       }
       body {
        margin-top: 100px;
       }
       
    </style>




  </head>

  <body class="bg-dark">

    <?php
        include_once 'menu.php';
    ?>


    <div class="row">  

        <div id="map" class="col-md-8">
            <?php
                require_once 'map.php';
            ?>

        </div>


        <div class="col-md-3" style="margin: 75px 20px 0px 20px; border: 3px white solid;">
            <h2 style="color: white;">My trip</h2>

            <?php

            /*read from the db the serialized array and unserialize it */
                require_once 'db_connect.php';

                if(isset($_COOKIE['UserId']))
                {
                    $id = $_COOKIE['UserId'];
                    $sql = "SELECT CONVERT(trip_sum USING utf8) as 'trip', trip_sum FROM trip where user_id=$id";

                    $result = $conn->query($sql);
                    
                    foreach ($result as $row) {
                        $test = print_r($row);
                        //echo $test;
                        foreach($row as $unser){
                            echo unserialize($unser);
                        }
                    }

                    /*$arr = unserialize($result['trip']);
                    echo $arr;*/
                }
            ?>


        </div>
        
        
    </div>


    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">

        <p class="m-0 text-center text-white">Copyright &copy; Arens Demaliaj 2018</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>