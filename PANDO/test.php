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
    <?php
    <div class="topnav">

      <!-- right logo -->

      <a href="welcomepg.html">
        <img src="pandaa.jpg" alt ="PANDO" />
      </a>
      <!-- left links -->
      <?php
    if (isset($_SESSION['loggedIn'])){
            if ($_SESSION['loggedIn'=== TRUE){
         
            echo  '<a href="#signup" class="login">Sign Up</a>';
      
                    echo  '<a href="login.php" class="login">Log In</a>';
            }
    } else {
    }
      ?>
     

        



    </div>

    <!-- main content stuff - title, subtitle, image button link thing -->
    <div class="main">
      <center>
        <h1> Travelling China </h1>
        <h2> Discover the world of travelling </h2>
        <!-- <a href = "link"> <img src = "explorepg.html" alt = "explorepg.html" width = "100" height = "150"> </a> -->
