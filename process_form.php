<?php
// process_form.php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Validate form data (perform additional validation as needed)
    if (empty($name) || empty($email) || empty($message)) {
        echo "Please fill in all fields.";
    } else {
        // Process the form data (you can send an email, save to a database, etc.)
        // For demonstration purposes, we'll just echo the received data
        echo "Form submitted successfully!<br>";
        echo "Name: $name<br>";
        echo "Email: $email<br>";
        echo "Message: $message";
    }
} else {
    echo "Invalid request method.";
}
?>
