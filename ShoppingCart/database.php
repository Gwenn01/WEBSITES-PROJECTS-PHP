<?php
    $host = 'localhost';
    $user = 'gwen';
    $password = '123';
    $database = 'dbshoppingcart';
    $connection = mysqli_connect($host, $user, $password, $database);
    if(mysqli_connect_error()){
        echo mysqli_connect_error();
    }else{
    };
?>