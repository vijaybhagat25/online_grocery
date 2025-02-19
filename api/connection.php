<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "online_grocari";

    $connect = mysqli_connect($servername,$username,$password,$dbname);

    if(!$connect)
    {
        die("connection failed:".mysqli_connect_error());
    }
?>