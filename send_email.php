<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $fullName = $_POST['fullName'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  // Replace the following lines with your own email handling logic
  $to = 'info@codesmogul.com';
  $subject = 'New Contact Form Submission';
  $headers = "From: $fullName <$email>" . "\r\n";
  $headers .= "Reply-To: $email" . "\r\n";
  $headers .= "MIME-Version: 1.0" . "\r\n";
  $headers .= "Content-Type: text/plain; charset=UTF-8" . "\r\n";
  
  $body = "Name: $fullName\nEmail: $email\n\n$message";

  if (mail($to, $subject, $body, $headers)) {
    echo 'Your message has been sent successfully.';
  } else {
    echo 'Oops! Something went wrong. Please try again.';
  }
}
?>
