<!DOCTYPE HTML>
<?php 
    session_start();
    
    include '../php_func.php';
    $post = $_GET['post'];
    $result = getPost($post);
    $row = $result->fetch_array(MYSQLI_ASSOC);
?>
<html>

<head>
  <link rel="stylesheet" type="text/css" href="explorepost_style.css">
  <script type="text/javascript" src="jquery-3.2.1.js"></script>
  <script type="text/javascript" src="explorepost_effect.js"></script>

</head>

<body onload="showpopup()">
  <!-- navbar --> 

  <div class="topnav">

    <!-- right logo -->

    <a href="home.php">
      <img src="pandologotp.png" alt ="PANDO" />
    </a>
    <!-- left links -->
    <div id="links">

      <a href="createaccount.html" class="nav_items">Account</a>
      <a href="myprofile.php?user=<?php echo $_SESSION['userName']; ?>" class="nav_items">My Profile</a>
      <a href="newsfeed.php" class="nav_items">Newsfeed</a>
      <a href="explorepg.php" class="nav_items">Explore</a>


    </div>




  </div>


<!-- <div class="main"> -->
      <!-- <center><h1 id="maintitle"> EXPLORE </h1></center> -->
      <!-- <span id="maintitle">Explore</span>
      

        <div class="item">
             <img src="dumplings.jpg" alt="Post title" class="image"> 
        </div>
        <div class="item">
         
             <img src="cbuilding.jpg" alt="Post title" class="image"> 
            
            
        </div>
        <div class="item">
          
             <img src="lizard.jpg" alt="Post title" class="image"> 
            
            
        </div>
        <div class="item">
          
             <img src="lanternc.jpg" alt="Post title" class="image"> 
            
            
        </div>
        <div class="item">
          
             <img src="dudewithglasses.jpg" alt="Post title" class="image"> 
            
           
        </div>
        <div class="item">
         
             <img src="clothestuff.jpg" alt="Post title" class="image"> 
            
            
        </div>
        <div class="item">
          <a href="explorepost.html" class="fullpost"> 
             <img src="sceneryy.jpg" alt="Post title" class="image"> 
            
            <center>
            
              <span class="hovertext">Post title </span>
            
            </center>
          </a>
        </div>
        <div class="item">
          <a href="explorepost.html" class="fullpost"> 
             <img src="karate.jpg" alt="Post title" class="image"> 
            
            <center>
            
              <span class="hovertext">Post title </span>
            
            </center>
          </a>
        </div>
        <div class="item">
          <a href="explorepost.html" class="fullpost"> 
             <img src="neck.jpg" alt="Post title" class="image"> 
            
            <center>
            
              <span class="hovertext">Post title </span>
            
            </center>
          </a>
        </div>
-->
  <center>



<?php
    $data = getUserThumb($row['userID']);
    $r = $data->fetch_array(MYSQLI_ASSOC);
    $url = "./handlesub.php?user=".$row['userID'];
    $word = '<!-- <input type="button" id="show_login" value="Show Login"> -->
    <div id="fullpost">
      
        <a href="explorepg.php" id ="exit_post" class="signup">X</a>
       <!--  profile pic  -->
       <img src="'.$r['thumbnail'].'" class="profilepic">

       <!-- blogname -->
       <h6 class="blogname"><a href="./myprofile.php?user='.$r['username'].'" class="blogname">'.$r['blogName'].'</a></h6>
       
       <a href='.$url.'>Follow</a>
       
       <!-- image -->
       <img src="'.$row['pAddress'].'"alt="Post title" class="image"> 
       <!-- location and pin -->
        <div class="pinlocation">
              <img src="pin.png" alt="Location" class="pin">
              <h6 class="city">'.$row['location'].'</h6>
            </div>

       <!-- text post stuff -->
       

          <div class="descriparea">
                  <h6 class="title">'.$row['title'].'</h6>
                  <span class="descrip">'.$row['textblob'].'</span>
          </div>
      
            <!-- <center>
            
              <span class="hovertext">'.$row['title'].'</span>

            </center> -->';
    echo $word;


       
            ?>


    </div>
  </center>

</body>

</html>
