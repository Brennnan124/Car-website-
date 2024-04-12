<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    
    // You can add additional validation or data processing here
    
    // Send an email (example)
    $to = "contact@example.com"; // Your email address
    $subject = "New Contact Form Submission";
    $headers = "From: $email";
    $mailBody = "Name: $name\nEmail: $email\n\n$message";
    
    if (mail($to, $subject, $mailBody, $headers)) {
        echo "Thank you for your message. We'll get back to you soon!";
    } else {
        echo "An error occurred. Please try again later.";
    }
} else {
    echo "Invalid request";
}
?>
