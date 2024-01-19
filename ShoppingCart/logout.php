<?php 
    session_start();
    $_SESSION['status'] = 'invalid';
    session_unset();
    header('location: login.php');
?>