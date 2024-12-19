<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars(trim($_POST["name"]));
    $email = htmlspecialchars(trim($_POST["email"]));
    $message = htmlspecialchars(trim($_POST["message"]));

    // Email recipient
    $to = "nailahcans18@gmail.com"; // Replace with your email address
    $subject = "New Contact Form Message";

    // Email content
    $email_content = "Name: $name\n";
    $email_content .= "Email: $email\n\n";
    $email_content .= "Message:\n$message\n";

    // Email headers
    $headers = "From: $email";

    // Send the email
    if (mail($to, $subject, $email_content, $headers)) {
        echo "<h2>Thank you for your message, $name! We will get back to you shortly.</h2>";
    } else {
        echo "<h2>Sorry, there was an error sending your message. Please try again later.</h2>";
    }
} else {
    echo "<h2>Invalid request method.</h2>";
}
?>
