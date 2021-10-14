<?php

$servername = "db";
$username = "yaseen";
$password = "password";
$db = "database";

// Create connection
$con = mysqli_connect($servername,$username,$password,$db);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}


?>
