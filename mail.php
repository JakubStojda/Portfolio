<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmail/Exception.php';
require 'phpmail/PHPMailer.php';
require 'phpmail//SMTP.php';

$name=$_POST['name'];
$email=$_POST['email'];
$msg=$_POST['msg'];

$mail = new PHPMailer;
$mail->CharSet = "UTF-8";

$mail->IsSMTP();
$mail->Host = 'smtp.gmail.com'; # Gmail SMTP host
$mail->Port = 465; # Gmail SMTP port
$mail->SMTPAuth = true; # Enable SMTP authentication / Autoryzacja SMTP
$mail->Username = "mailsender9781@gmail.com"; # Gmail username (e-mail) / Nazwa użytkownika
$mail->Password = "AlaMaKota123"; # Gmail password / Hasło użytkownika
$mail->SMTPSecure = 'ssl';



$mail->From = 'mailsendder9781@gmail.com'; # REM: Gmail put Your e-mail here
$mail->FromName = 'Formularz Portfolio'; # Sender name
$mail->AddAddress('jakubstojda98@icloud.com', 'Jakub Stojda'); # # Recipient (e-mail address + name) / Odbiorca (adres e-mail i nazwa)

$mail->IsHTML(true); # Email @ HTML

$mail->Subject = 'Wiadomość od '.$name;
$mail->Body = $email.'<br>'.$msg;
$mail->send();