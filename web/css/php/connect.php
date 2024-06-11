<?php
$db_host = "localhost:3307";
$db_username = "root";
$db_pass = "";
$db_name= "traveliq";

// Create connection

$conn= mysqli_connect("$db_host","$db_username","$db_pass",$db_name)or die("Could not connect to mySQL"); 

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());

}


?>