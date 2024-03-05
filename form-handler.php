<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$emial_from='info@yourwebsite.com'
    
$email_subject ='New From Submission'
$email_body="User Name: $name.\n"."user Email: $visitor_email.\n"."subject: $subject.\n"."User Message: $message.\n";


$to='kanish8872@gmail.com';
$headers="From: $email_from \r\n";
 $headers= "Reply-To: $visitior_email \r\n";
mail($to,$email_subject,$email_body,$headers);

header("Location: contact.html");
?>