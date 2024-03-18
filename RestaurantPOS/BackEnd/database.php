<?php 
    $host = 'localhost';
    $name = 'gwen';
    $password = '123';
    $database = 'dbrestaurantpos';

    $connection = mysqli_connect($host, $name, $password, $database);

    if(!$connection){
        echo mysqli_connect_error();
    }

?>