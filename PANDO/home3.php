<!DOCTYPE HTML>
<?php
    session_start();

    ini_set('display_errors', 1);
    error_reporting(E_ALL|E_STRICT);
?>

<html>
  <head>
    <title>TRAVEL CHINA</title>
    <link href='home_style.css' rel='stylesheet' type='text/css'>
  </head>

  <body>
    <!-- navbar --> 
    <div class="topnav">

      <!-- right logo -->

      <a href="welcomepg.html">
        <img src="pandaa.jpg" alt ="PANDO" />
      </a>
      <!-- left links -->
      <?php
            if (isset($_SESSION['loggedIn'])){
                    if ($_SESSION['loggedIn'] = 1){
                 
                      echo '<a href="#profile" class="login">'.$_SESSION['userName'];
                      echo '<a href="#profile" class="login">'.$_SESSION['userName'];
       :w         }       
             } else {
                      echo '<a href="newsfeed.html" class="nav_items" id="signup">Sign Up</a>';
        	      echo '<a href="login.html" class="nav_items" id="login">Log In</a>';
            }
      ?>
    </div>

    <div class="main">
      <center>
        <h1> PANDO </h1>
        <h2> DISCOVER THE WORLD OF TRAVELLING </h2>
        <!-- <a href = "link"> <img src = "explorepg.html" alt = "explorepg.html" width = "100" height = "150"> </a> -->

        <a href="explorepg.html" id="dobuttonlink" > <div id="dobutton">DO</div></a>



      </center>
    </div>

    


  </body>
</html>
