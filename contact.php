<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_name = $_POST['name'];
    // dd($user_name);
    $user_email = $_POST['email'];
    $user_phone = $_POST['phone'];
    // $user_subject = $_POST['subject'];
    $user_message = $_POST['message'];

    // Set a custom "From" address (replace with your actual address) domain
    // $from_address = "PIS";
    $from_address = "no-reply@yourdomain.com";


    $to = "giridharkalapala42@gmail.com";
    $subject = "New Contact Form Submission from " . $user_name;

    // Build a more informative email body with HTML for better formatting
    $body = "<!DOCTYPE html>
<html>
<body>
  <p><strong>Name:</strong> $user_name</p>
  <p><strong>Email:</strong> $user_email</p>
  <p><strong>Phone:</strong> $user_phone</p>
  <p><strong>Message:</strong> $user_message</p>
</body>
</html>";

    // Set headers with proper content type and custom "From" address
    $headers = "From: $from_address\r\n";
    $headers .= "Reply-To: $user_email\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";


    // if (mail($to, $subject, $body, $headers)) {
    if (mail($to, 'Enquiry Form Details', $body, $headers)) {
        header("Location: success.html");
        exit();
    } else {
        echo "error";
    }
}