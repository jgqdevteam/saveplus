<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name    = htmlspecialchars($_POST['name']);
    $email   = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    $to      = "junmarkdocdoc@gmail.com"; // change to your email
    $subject = "New Contact Form Message";
    $headers = "From: $email\r\nReply-To: $email\r\n";
    
    $body = "You received a new message:\n\n".
            "Name: $name\n".
            "Email: $email\n".
            "Message:\n$message";

    if (mail($to, $subject, $body, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Failed to send message. Please try again.";
    }
} else {
    http_response_code(405); // Method Not Allowed
    echo "Method not allowed";
}
?>
