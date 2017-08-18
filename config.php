<?php

$host = 'localhost';
$mysql_username = 'root';
$mysql_password = '';
$mysql_db = 'test';
// connect to database
$conn = mysqli_connect($host, $mysql_username, $mysql_password,$mysql_db)or die("connection Failed");

?>