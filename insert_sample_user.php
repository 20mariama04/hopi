<?php
// Database connection parameters
$servername = "localhost";
$username = "your_db_username";
$password = "your_db_password";
$dbname = "your_database_name";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Sample user data
$user_type = 'patient';
$user_id = 'patient001';
$plain_password = 'patientpass';

// Hash the password
$hashed_password = password_hash($plain_password, PASSWORD_BCRYPT);

// SQL to insert a sample user
$sql = "INSERT INTO users (user_type, user_id, password) VALUES ('$user_type', '$user_id', '$hashed_password')";

if ($conn->query($sql) === TRUE) {
    echo "New user created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close connection
$conn->close();
?>