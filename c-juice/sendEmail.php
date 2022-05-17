<?php
header('Content-Type: application/json');
require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php';
require 'phpmailer/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$username = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];

$mail = new PHPMailer();
$mail->isSMTP();
$mail->Host = "smtp.gmail.com";
$mail->SMTPAuth = true;
$mail->SMTPSecure = "tls";
$mail->Port = "587";
$mail->SMTPDebug = SMTP::DEBUG_SERVER;
$mail->Username = "qwertysparrow123@gmail.com";
$mail->Password = "Richard25072014";
$mail->Subject = "New request to contact with com";
$mail->setFrom("qwertysparrow123@gmail.com");
$mail->Body = "Name: " . $username . " Email: " . $email . " Phone: " . $phone;
$mail->addAddress("qwertysparrow123@gmail.com");
if ($mail->Send()) {
    echo json_encode("{message: \"Message sent successfully\"}");
} else {
    echo $mail->ErrorInfo;
}
$mail->smtpClose();