<?php
$hostname = "localhost";
$username = "admin";
$password = "Admin@1234!";
$dbName = "myportfolio";

// Create connection
$conn = new mysqli($hostname, $username, $password, $dbName);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
