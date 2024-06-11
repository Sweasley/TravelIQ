<?php

// Database configuration
define('DB_HOST', 'localhost'); // Change this to your database host
define('DB_USERNAME', 'username'); // Change this to your database username
define('DB_PASSWORD', 'password'); // Change this to your database password
define('DB_NAME', 'database_name'); // Change this to your database name

// Function to establish database connection
function connectDB() {
    $conn = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);
    if ($conn->connect_error) {
        throw new Exception('Could not connect: '. $conn->connect_error);
    } else {
        return $conn;
    }
}

?>
