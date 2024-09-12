<?php
//sending mail in php
$to = "sudip@lict.edu.np";
$subject = "Test mail";
$message = "Hello! This is a simple email message.";
$from = "sudip.parajulee@gmail.com";
$headers = "From:" . $from;

mail($to, $subject, $message, $headers);
echo "Mail Sent.";
?>