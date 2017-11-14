<!DOCTYPE HTML>
<?php
    session_start();
    session_destroy();

    header('location: ./process_login.php');

?>
