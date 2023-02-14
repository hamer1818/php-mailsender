<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require 'Frameworks/PHPMailer/src/Exception.php';
require 'Frameworks/PHPMailer/src/PHPMailer.php';
require 'Frameworks/PHPMailer/src/SMTP.php';

$mail = new PHPMailer(true);

// Gmail SMTP ayarları
$mail->isSMTP();
$mail->SMTPDebug = 0;
$mail->Host = 'smtp.mail.com'; //smtp adresi yazılacak
$mail->SMTPAuth = true;
$mail->Username = 'ornekmail@mail.com';  //hangi mail adresinden gönderilecek ise onun mail adresi yazılacak
$mail->Password = '123456'; //mail adresinin şifresi yazılacak
$mail->SMTPSecure = "tls";
$mail->Port = 587;
$mail->CharSet = 'UTF-8';

// Kimden ve kime
$mail->setFrom('ornekmail@mail.com', 'hamza ortatepe');
$mail->addAddress($_POST["email"], 'alıcı adı');

// İçerik
$mail->isHTML(true);
$mail->Subject = 'konu';
$mail->Body    = $_POST["message"];

// Gönderme
if(!$mail->send()) {
    echo 'mesaj gönderilemedi.<br/>';
    echo 'Mesaj gönderme hatası: ' . $mail->ErrorInfo;
} else {
    echo 'mesaj gönderildi';
}


?>