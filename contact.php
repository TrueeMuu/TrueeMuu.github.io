<?php

// This is the PHP code

function sendMail() {
  // Check if the form has been submitted
  if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['subject']) && isset($_POST['message'])) {

    // Get the form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Send the email
    mail('msabakada17@gmail.com', $subject, $message, "From: $email");

    // Redirect the user to a success page
    header('Location: success.php');

  }
}

?>