<?php
$servername = "localhost"; // Localhost server
$username = "root";        // Default MySQL username for localhost
$password = "";            // Default MySQL password (leave empty for XAMPP/WAMP)
$dbname = "fyp"; // Replace with the name of your database

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>
