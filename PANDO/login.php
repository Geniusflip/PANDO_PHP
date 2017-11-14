<!DOCTYPE HTML>
<?php 
    session_start();
    if (!isset($_SESSION['language'])){
        $_SESSION['language'] = 0;
    }
    include './languages.php';
    ini_set('display_errors', 'On');
    $word = getLanguage($_SESSION['language']); //array( "log in", "sign up", "username", "password", "discover the world of travelling", "do");
                
?>

<html>

<head>
    <link rel="stylesheet" type="text/css" href="login_style.css">
    <script type="text/javascript" src="jquery-3.2.1.js"></script>
    <script type="text/javascript" src="login_effect.js"></script>

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

        
      <a href="signup.html" class="nav_items" id="signup"><?php echo $word[0]; ?></a>
      <a href="login.php" class="nav_items" id="login"><?php echo $word[1]; ?></a>
        
        
      </div>
        



    </div>
 
    <center>
        <!-- <input type="button" id="show_login" value="Show Login"> -->
        <div id="loginform">

            <form method="post" action="./process_login.php">
                <div>
                    <a href="home.php" id ="hide_login" class="login">X</a>
                    </div> 
                    <p><?php echo $word[0]; ?></p>

                    <input type="text" id="login" name="uid" placeholder ="<?php echo $word[2]; ?>">
                    <input type="password" id="password" name="upass" placeholder ="<?php echo $word[3]; ?>">
                <input type='submit' id="dologin" onclick="chUserAndPssword()"></button>
            </form>
        </div>
    </center>

</body>

</html>
