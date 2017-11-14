<!DOCTYPE html>
<?php
    session_start();
?>
<html>
  <head>
    <title>PANDO</title>
    <link href='createaccount_style.css' rel='stylesheet' type='text/css'>
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

        <a href="createaccount.php" class="nav_items">Account</a>
        <a href="myprofile.php?user=<?php echo $_SESSION['userName']?>" class="nav_items">My Profile</a>
        <a href="newsfeed.php" class="nav_items">Newsfeed</a>
        <a href="explorepg.php" class="nav_items">Explore</a>
        
        
      </div>
        



    </div>

    <!-- main content stuff - title, subtitle, image button link thing -->
    <div class="main">
      
        
        <!-- create account titles -->
        <center>
          <h1 id="maintitle">MAKE YOUR BLOG SPECIAL</h1>
          <h2 id="subtitle">Tell us about yourself </h2>
        </center>


        <!-- login form -->

        <form method='POST' action='./process_cAccount.php'>
          <input type="file" name="profilepic" id="profilepic">
          <br>
          <h4 class="picuploadtext">Profile Picture Upload</h3>
          <br>
          <input type="file" name="backgroundpic" id="backgroundpic">
          <h4 class="picuploadtext">Background Picture Upload</h3>



          <input type="text" id="blogname" class="textinput" name="blogname" placeholder ="Name of your blog">
          <br>
          
          <textarea id="descrip" class="textinput" name='descrip' placeholder="What is your blog about? How often do you travel? What are your favourite things to share?"> </textarea>
          <br>
          <input type="text" id="location" class="textinput" name="location" placeholder ="The area you're currently in"> <!-- perhaps have a cities pop up as you type? -->
          <br> 


          <button type="submit" id="submit" value="DO"> 

        </form>





      
    </div>


    


  </body>
</html>
