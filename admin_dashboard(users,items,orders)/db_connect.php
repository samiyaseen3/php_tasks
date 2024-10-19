<?php
// db_connect.php

$servername = "localhost"; // Database server (usually localhost)
$username = "root"; // Database username
$password = ""; // Database password (leave empty for XAMPP or WAMP)
$database = "test"; // Replace with your actual database name

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
