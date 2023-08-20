<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = $_POST["fullname"];
    $mobileNumber = $_POST["mobileNumber"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $to = "clarkuyanguren@gmail.com"; // Receiver's email address
    $subject = "New Contact Form Submission";
    $headers = "From: $email";
    $emailBody = "Fullname: $fullname\nMobile Number: $mobileNumber\nEmail: $email\nMessage:\n$message";

    if (mail($to, $subject, $emailBody, $headers)) {
        echo "success"; // Sent successfully
    } else {
        echo "error"; // Error sending email
    }
}
?>