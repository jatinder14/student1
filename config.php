<?php
  
$servername = "localhost";
$username = "root";
$password = "root";

// Create connection
$conn = new mysqli($servername, $username, $password,"Contact_Application");

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

    
?>
