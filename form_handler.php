<?php
// contact 페이지 각 서식을 받는 함수
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'https://xhfl160321.github.io/eduH/index.html';
$email_subject = 'New Form Submission';
$email_body = "User Name: $name.\n".
              "USer Email: $visitor_email.\n".
              "Subject: $subject.\n".
              "User Message: $message .\n";

$to = 'sueng0422@gmail.com';
$headers = "From: $email_from \r\n";     
$headers .= "Reply-To: $visitor_email \r\n";

mail($to, $email_subject, $email_body, $headers);

header("Location: ./contact.html");
?>