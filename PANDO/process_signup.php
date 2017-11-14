<!DOCTYPE HTML>
<?php
    include '../php_func.php';
    
    createUser($_POST);  
    header('location: ./createaccount.php');

    $result = authenticate($_POST);
    if ($result){
        $_SESSION['loggedIn'] = TRUE;
        $_SESSION['userID'] = $result;
        $_SESSION['userName'] = $_POST['uid'];
        $_SESSION['language'] = 0;
        header('Location: ./home.php');
    } else {
        session_destroy();    
        header('location: ./home.php'); 
        
    }

?>
