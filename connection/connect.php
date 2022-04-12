<?php

//main connection file for both admin & front end
$servername = "localhost"; //server
$username = "id18635916_root"; //username
$password = "{{+4g+y&{62MCZ?i"; //password
$dbname = "id18635916_ido_weddings";  //database

// Create connection
$db = mysqli_connect($servername, $username, $password, $dbname); // connecting 
// Check connection
if (!$db) {       //checking connection to DB	
    die("Connection failed: " . mysqli_connect_error());
}

?>