<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    
    // Your email address - CHANGE THIS!
    $to = "hamidsaid1984@gmail.com";
    
    // Email subject
    $subject = "New SpikeTrade Form Submission";
    
    // Email body
    $message = "Name: " . $name . "\n";
    $message .= "Email: " . $email . "\n";
    
    // Email headers
    $headers = "From: " . $email . "\r\n";
    $headers .= "Reply-To: " . $email . "\r\n";
    
    // Send email
    if (mail($to, $subject, $message, $headers)) {
        echo "Thank you! Your message has been sent.";
    } else {
        echo "Sorry, there was an error sending your message.";
    }
} else {
    echo "Invalid request.";
}
?>