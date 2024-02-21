<?php
$name = $_post['name'];
$visitor_email = $_post['email'];
$subject = $_post['subject'];
$message = $_post['message'];

&email_form ='info@themindfulliving.com';

$email_subject ='New Form Submission';

$email_body = "User name: $name.\n".
                "User Email: $visitor_email.\n".
                "Subject: $subject.\n".
                "User message: $message.\n";
                
$to = '';

$headers = "From: $email_form \r\n";

$headers = "Reply-to: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: contact.html");
?>