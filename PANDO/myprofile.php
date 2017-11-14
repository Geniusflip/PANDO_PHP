<!DOCTYPE html>
<?php 
    session_start();
    
    include '../php_func.php';
    
    $user = $_GET['user'];
    $result = getProfile($user);
    $row = $result->fetch_array(MYSQLI_ASSOC);
    $thumb = $row['thumbnail'];
    $id = $row['userID'];
?>
<html>
  <head>
    <title>PANDO</title>
    <link href='myprofile_style.css' rel='stylesheet' type='text/css'>
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

        <a href="createaccount.html" class="nav_items">Account</a>
        <a href="myprofile.php?user=<?php echo $_SESSION['userName'] ?>" class="nav_items">My Profile</a>
        <a href="newsfeed.php" class="nav_items">Newsfeed</a>
        <a href="explorepg.php" class="nav_items">Explore</a>
        
        
      </div>
        



    </div>

    <!-- main content stuff - title, subtitle, image button link thing -->
    <div class="main">
      

        <!-- <div id="createpost">
          <div id="toppart">
          </div>
          <textarea id="typetext"></textarea>


        </div> -->

      
 <!--      posts -->


        <div id="createpost">
            <div id="leftsideprof">
              <center>
              <span id="blogname"><?php echo $row['blogName']; ?></span><br>
              <span id="username"><?php echo $row['username']; ?></span><br>
              <span id="location"><?php echo $row['location']; ?></span>
          </center>
          </div>

          <img src="<?php echo $thumb ?>" id="mainprofilepic">

          <div id="rightsideprof"><span id="blogdescrip"><?php echo $row['shortDesc'] ?></span></div>
                  </div>
<?php 

    $result = getProfilePosts($id);
    while ($row = $result->fetch_array(MYSQLI_ASSOC)){
        $word =' <div class="item">
            <h6 class="title">'.$row['title'].'</h6>
            <img src="'.$thumb.'" alt="Blog name" class="profilepic"> 
            <div class="pinlocation">
              <img src="pin.png" alt="Location" class="pin">
              <h6 class="city">"'.$row['location'].'"</h6>
            </div>


            <div class="descriparea"><p class="description">'.$row['textblob'].'</p></div>
             <img src="'.$row['pAddress'].'" alt="Post title" class="image"> 
              <div class="arrow-right"></div>
              <div class="arrow-left"></div>
            <!-- <center>
            
              <span class="hovertext">'.$row['title'].'</span>

            </center> -->
          
        </div>';
         echo $word;

    }
?>



    


  </body>
</html>
