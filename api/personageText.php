<?php
    require_once('./connect.php');

    session_start();
    $username=$_SESSION['username'];
    echo $username;
    
?>