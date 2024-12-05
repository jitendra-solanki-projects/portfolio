<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['form-message'];
    
    // Set up the recipient email address
    $to = "jitendrasolanki110@gmail.com"; // Change this to your email address

    // Set up the email subject and body
    $subject = "Contact Form Submission";
    $body = "Name: $name\nEmail: $email\nMessage: $message";

    // Send the email
    if (mail($to, $subject, $body)) {
        echo json_encode(array('Message'=>"<p>Email sent successfully!</p>",'response'=>"success"));
    } else {
        echo json_encode(array('Message'=>"<p>Sorry, there was an error sending your message.</p>",'response'=>"success"));
    }
}
?>

