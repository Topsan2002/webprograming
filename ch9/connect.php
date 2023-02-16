<?php
    $hostname = "localhost";
    $usename = "root";
    $password = "";
    $dbName = "bookstore001";

    // $conn = mysqli_connect($hostname, $usename, $password, $dbName);
    // mysqli_query($conn, "set character_set_connection=utf8mb4");
    // mysqli_query($conn, "set character_set_client=utf8mb4");
    // mysqli_query($conn, "set character_set_results=utf8mb4");

    // if(!$conn){
    //     die("Connect has error !!!");
    // }

    $conn = new mysqli($hostname, $usename, $password, $dbName);

    $conn->set_charset("utf8mb4");
    if($conn->connect_error){
        die("Connect has error !!!");
    }

?>