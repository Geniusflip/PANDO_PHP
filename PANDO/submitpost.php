<!DOCTYPE HTML>
<?php
    session_start();

    include '../php_func.php';

    submitpost($_POST, $_FILES);

    header('location: ./newsfeed.php'); 

?> 
