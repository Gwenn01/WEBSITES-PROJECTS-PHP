<?php
    $host = "localhost";
    $name = "gwen";
    $passowrd = "123";
    $database = "dbstudentmanagementsystem";
    $connection = mysqli_connect($host, $name, $passowrd, $database);

    if(!$connection){
        echo mysqli_connect_error();
    }

?>