<?php
    $server = "localhost";
    $username = "root";
    $password = "";
    $dbname = "vehicle_db";
   $port="3308";
    $conn = new mysqli($server, $username, $password, $dbname,$port);
    if($conn->connect_error)
    {
        die("Connection Error".$conn->connect_error);
    }
?>