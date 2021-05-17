<?php
$name=$_POST['name'];
$visitor_email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];


$email_from = 'info@yourwebsite.com';
$email_subject='new form submission';
$email_body="User Name: $name.\n".
"User Email: $visitor_email.\n".
"subject: $subject.\n".
"Message: $message.\n".

$to='name@mail.com'
$Headers="From: $email_from \r\n";
$Headers .="Reply-To: $visitor_email \r\n";
mail($to,$email_subject,$email_body,$Headers);
header("location: contact.html")
 ?>
