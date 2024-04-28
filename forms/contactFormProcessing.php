<?php
// Include database configuration
include('../config/database.php');

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];


    $sql = "INSERT INTO contact (name, email, subject, message) VALUES ('$name', '$email', '$subject', '$message')";
    if ($conn->query($sql) === TRUE) {
        // No error occurred, so output success message
        echo "Message has been sent successfully!";
    } else {
        // An error occurred, so output the error message
        echo "Error: " . $conn->error;
    }


    // Close database connection
    $conn->close();
}
