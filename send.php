<?php
// Check if the request method is POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Get the form data
  $name = $_POST['name'];
  $email = $_POST['email'];
    
     $subject = $_POST['subject'];
  $message = $_POST['message'];

  // Perform any necessary validation on the form data
  // ...

  // Send the email
  $to = 'bullettech999@gmail.com'; // Replace with the actual recipient email address
  $subjec = '$subject';
  $message = "Name: $name\n
              Subject: $subject\n
              Email: $email\n
              Message: $message";
  $headers = "From: sumitsaini@all2z.com"; // Replace with the actual sender email address

  if (mail($to, $subjec, $message, $headers)) {
    // Email sent successfully
    $response = array('status' => 'success', 'message' => 'Mail sent successfully!');
    echo json_encode($response);
  } else {
    // Failed to send email
    $response = array('status' => 'error', 'message' => 'Failed to send email.');
    echo json_encode($response);
  }
} else {
  // Invalid request method
  $response = array('status' => 'error', 'message' => 'Invalid request method.');
  echo json_encode($response);
}
?>
