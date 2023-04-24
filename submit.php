<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Retrieve form data
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  // Construct email message
  $to = 'youremail@example.com';
  $subject = 'New Contact Form Submission';
  $body = "Name: $name\nEmail: $email\nMessage:\n$message";

  // Send email
  mail($to, $subject, $body);

  // Redirect to thank you page
  header('Location: thankYou.html');
  exit;
}

?>
