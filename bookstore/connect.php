<?php

$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "db_bookstore";
$conn = mysqli_connect($hostname, $username, $password, "bookstore");
if (!$conn) die("ไม่สามารถติดต่อกับ MySQL ได้");
mysqli_select_db($conn, $dbname) or die("ไม่สามารถเลือกฐานข้อมูล bookstore ได้");
mysqli_query($conn, "set character_set_results=tis620");
mysqli_query($conn, "set character_set_client=tis620");
mysqli_query($conn, "set character_set_connection=tis620");
mysqli_query($conn, "set character_set_results=utf8mb4");

?>