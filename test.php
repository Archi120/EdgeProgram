<?php
// Database configuration
$servername = "localhost"; // XAMPP runs MySQL on localhost
$username = "root";        // Default username for XAMPP
$password = "";            // Default password for XAMPP is empty

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully<br>";

// Create database
$dbname = "my_database"; 
$sql = "CREATE DATABASE IF NOT EXISTS $dbname";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully<br>";
} else {
    echo "Error creating database: " . $conn->error;
}

// Close connection
$conn->close();
?>