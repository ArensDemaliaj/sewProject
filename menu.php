
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="index.php">Visit Albania</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
                                        
            <li class="nav-item <?php if(basename($_SERVER['SCRIPT_NAME']) == 'login.php') { echo 'active'; } ?>">
              <?php
                if(!isset($_COOKIE["email"]))
                {
                  echo "<a class='nav-link' href='login.php'>";
                  echo "<span class='glyphicon glyphicon-log-in'></span>";
                  echo " Login";   
                  echo "</a>";            
                }
              ?>
            </li>

            <li class="nav-item <?php if(basename($_SERVER['SCRIPT_NAME']) == 'register.php') { echo 'active'; } ?>">
              <?php
                if(!isset($_COOKIE["email"]))
                {
                  echo "<a class='nav-link' href='register.php'>";
                  echo "<span class='glyphicon glyphicon-user'></span>";
                  echo " Register";
                  echo "</a>";
                }
              ?>
            </li>

            <li class="nav-item <?php if(basename($_SERVER['SCRIPT_NAME']) == 'logout.php') { echo 'active'; } ?>">
              <?php
                if(isset($_COOKIE["email"]))
                {
                  echo "<a class='nav-link' href='logout.php'>";
                  echo "<span class='glyphicon glyphicon-log-out'></span>";
                  echo " Logout";
                  echo "<a>";
                }
              ?>
            </li>
          </ul>
        </div>
      </div>
    </nav>