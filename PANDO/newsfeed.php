<!DOCTYPE HTML>
<?php
    session_start();
    include '../php_func.php';

 //   if (isset($_SESSION['loggedIn'])){
   //         if(!$_SESSION['loggedIn'] = 1){
     //       } else { 
       //         header('location: ./explorepg.php');
         //   }
   // } else {
     //   header('location: ./explorepg.php');
   // }
    $result = getSubbedPosts($_POST);
?>
<html>
  <head>
    <title>PANDO</title>
    <link href='newsfeed_style.css' rel='stylesheet' type='text/css'>
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
        <a href="createaccount.html"  class="nav_items">Account</a>
        <a href="myprofile.php?user=<?php echo $_SESSION['userName'] ?>" class="nav_items">My Profile</a>
        <a href="newsfeed.php" class="nav_items">Newsfeed</a>
        <a href="explorepg.php" class="nav_items">Explore</a>
      </div>
    </div>

    <!-- main content stuff - title, subtitle, image button link thing -->
    <div class="main">
       <span id="maintitle">Newsfeed</span>

        <!-- <div id="createpost">
          <div id="toppart">
          </div>
          <textarea id="typetext"></textarea>


        </div> -->

      
 <!--      posts -->


        <div id="createpost">
            
            <div id="header"><span id="headertext">Done something cool recently?</span></div>
          <form method='POST' action='submitpost.php' enctype="multipart/form-data" enctype="multipart/form-data" enctype="multipart/form-data" enctype="multipart/form-data" enctype="multipart/form-data" enctype="multipart/form-data" enctype="multipart/form-data" enctype="multipart/form-data">  
            <textarea id="textfield" name='textfield'></textarea>
            <img src="img.png" id="insertimg">
            <!-- <input type="file" name="img"> -->
            <img src="pin.png" id="insertloca">
            <!-- <input type="text" id="location">
 -->
            <button id="publish-button">Publish</button>
            <!--<input type="submit" value="submit" id="submitbutton"> -->

          </form>
        </div>
        <?php
            while ($row = $result->fetch_array(MYSQLI_ASSOC)) {

                    $data = getUserThumb($row['userID']);
                    $r = $data->fetch_array(MYSQLI_ASSOC);
                    $word = '<div class="item">
                          
                            <img src="'.$r['thumbnail'].'" alt="Blog name" class="profilepic"> 
                            <div class="pinlocation">
                              <img src="pin.png" alt="Location" class="pin">
                              <h6 class="city">'.$row['location'].'</h6>
                            </div>
                            <div class="descriparea">'.$row['textblob'].'<p class="description">
                                    
                            </p></div>
                             <img src="'.$row['pAddress'].'" alt="Post title" class="image"> 
                              <div class="arrow-right"></div>
                              <div class="arrow-left"></div>
                            <!-- <center>
                            
                              <span class="hovertext">'.$row['title'].' </span>

                            </center> -->
                          
                        </div>';
                    echo $word;
                }
        ?>
 </body>
</html>
