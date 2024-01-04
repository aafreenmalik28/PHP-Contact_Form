<?php
$dbHost = 'localhost';
$dbUser = 'root';
$dbPass = '';
$dbName = 'contact';

// Create connection
$conn = mysqli_connect ($dbHost, $dbUser, $dbPass, $dbName);

// Check connection
if (!$conn) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>