<!DOCTYPE HTML>
<?php
    session_start();

    ini_set('display_errors', 1);
    error_reporting(E_ALL|E_STRICT);

?>
<html>
  <head>
    <title>PANDO</title>
    <link href='home_style.css' rel='stylesheet' type='text/css'>
  </head>

  <body>
    <!-- navbar --> 

    <div class="topnav">

      <!-- right logo -->

      <a href="home.html">
        <img src="pandologotp.png" alt ="PANDO" />
      </a>
      <!-- left links -->
      <div id="links">
	<?php
            if (isset($_SESSION['loggedIn'])){
                    if ($_SESSION['loggedIn'] = 1){
                      echo '<a href="logout.php" class="nav_items" id="login">Log Out</a>';
                      echo '<a href="#profile" class="nav_items" id="signup"> Welcome, '.$_SESSION['userName'].'!</a>';
                     
                }       
             } else {
                      echo '<a href="signup.html" class="nav_items" id="signup">Sign Up</a>';
       			
		      echo '<a href="login.php" class="nav_items" id="login">Log In</a>';
            }
      ?>
        

        
        
      </div>
        



    </div>

    <!-- main content stuff - title, subtitle, image button link thing -->
    <div class="main">
      <center>
        <h1> PANDO </h1>
        <h2> DISCOVER THE WORLD OF TRAVELLING </h2>
        <!-- <a href = "link"> <img src = "explorepg.html" alt = "explorepg.html" width = "100" height = "150"> </a> -->

        <a href="explorepg.php" id="dobuttonlink" > <div id="dobutton">DO</div></a>



      </center>
    </div>


    


  </body>
</html>
