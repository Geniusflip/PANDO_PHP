<!DOCTYPE html>
<?php
    session_start();

    require('../php_func.php');

    $result = createAccount($_POST);

    file_put_contents('./tmp/'.$_SESSION['username'].'.jpg', $_POST['thumbnail']); 

    header('location: ./myaccount.php');

?> 
