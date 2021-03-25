<?php

$host = 'localhost';
$username = 'root';
$password = '';
$database = "gamma";

//connect to the database
$conn = mysqli_connect($host, $username, $password, $database);

//Test connection
if(!isset($conn)){
    die("connection failed");
}
