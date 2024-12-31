<?php
// Step 1: Database Connection
$servername = "localhost"; 
$username = "root";        
$password = "";            
$dbname = "my_database";   

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully<br>";

// Step 2: SQL to Insert Multiple Values
$sql = "INSERT INTO Users (firstname, lastname, email) 
        VALUES 
        ('John', 'Doe', 'john.doe@example.com'),
        ('Jane', 'Smith', 'jane.smith@example.com'),
        ('Alice', 'Brown', 'alice.brown@example.com')";

// Step 3: Execute Query
if ($conn->query($sql) === TRUE) {
    echo "New records created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close connection
$conn->close();
?>
