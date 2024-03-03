<?php 
    $host = "localhost";
    $db = "db_pegawai";
    $username = "root";
    $password = "";

    $connect = mysqli_connect($host, $username, $password, $db);

    if (!$connect) {
        die('Failed to connect to :' . mysqli_connect_error());
    }
?>