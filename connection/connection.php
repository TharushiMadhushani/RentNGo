<?php
    $hostname = "172.0.0.1:3306";
    $username = "root";
    $password = "mariadb";
    $dbname = "RentNGo";

    $connection = mysqli_connect($hostname,$username,$password,$dbname);
?>