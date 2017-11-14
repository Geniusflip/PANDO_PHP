<?php
    include '../php_func.php';
    
    addSub($_GET['user']);

    header ('location: ./explorepg.php');

?>
