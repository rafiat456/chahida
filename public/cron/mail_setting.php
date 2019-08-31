<?php

require 'PHPMailerAutoload.php';

$mail = new PHPMailer;

//$mail->SMTPDebug = 3;   // Enable verbose debug output

$mail->isSMTP();     // Set mailer to use SMTP
$mail->Host = getenv('MAIL_HOST');   // Specify main and backup SMTP servers
$mail->SMTPAuth = true;     // Enable SMTP authentication
$mail->Username = getenv('MAIL_USERNAME');     // SMTP username
$mail->Password = getenv('MAIL_PASSWORD');     // SMTP password
$mail->SMTPSecure = getenv('MAIL_ENCRYPTION');  // Enable TLS encryption, `ssl` also accepted
$mail->Port = getenv('MAIL_PORT');      // TCP port to connect to
?>