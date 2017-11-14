<!DOCTYPE html>
<?php 
    session_start();
    include '../php_func.php';

    $result = getRecentPosts();
?>
<html>
  <head>
    <title>PANDO</title>
    <link href='explorepg_style.css' rel='stylesheet' type='text/css'>
  </head>

  <body>
    <!-- navbar --> 

    <div class="topnav">

      <!-- right logo -->

      <a href="home.php">
        <img src="pandologotp.png" alt ="PANDO" />
      </a>
      <!-- left links -->
      <div id="links">
    <?php
        if (isset($_SESSION['loggedIn'])){ 
               echo ' <a href="createaccount.html" class="nav_items">Account</a>';
               echo '<a href="myprofile.php?user='.$_SESSION['userName'].'" class="nav_items">My Profile</a>';
               echo ' <a href="newsfeed.php" class="nav_items">Newsfeed</a>';
        } else {
               echo '<a href="signup.html" class="nav_items" id="signup">Sign Up</a>';
               echo '<a href="login.php" class="nav_items" id="login">Log In</a>';
            } 
    ?>
        <a href="explorepg.php" class="nav_items">Explore</a>
      </div>
    </div>

    <!-- main content stuff - title, subtitle, image button link thing -->
    <div class="main">
        <span id="maintitle">Explore</span>
        <?php
            while($row = $result->fetch_array(MYSQLI_ASSOC)){
              $item = '<div id="num"  class="item"><a href="explorepost.php?post='.$row['postID'].'" class="fullpost"><img src="'.$row['pAddress'].'" alt="Post title" class="image"></a><center><span class="hovertext">'.$row['title'].'</span></center></div>';
              echo $item;
            }         
        ?>
      	
      <!--  do something with post title so that it remains centered when the post title is long -->

      <!-- fix the sizing of the image   -->
    </div>


    


  </body>
</html>
