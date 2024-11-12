<?php

require_once "{caminho}/PHPMailer-master/src/PHPMailer.php";
require_once "{caminho}/PHPMailer-master/src/SMTP.php";
require_once "subject-email.php";

$mail = new PHPMailer\PHPMailer\PHPMailer();
$mail->IsSMTP(); // enable SMTP 
$mail->setLanguage('pt_br', '/optional/path/to/language/directory/');
$mail->CharSet = 'UTF-8';
// $mail->SMTPDebug = 2; // debugging: 1 = errors and messages, 2 = messages only 
$mail->SMTPAuth = true; // Autenticação habilitada
$mail->SMTPSecure = 'ssl'; // Transferência segura habilitada, necessário para Gmail
$mail->Host = "mail.seudominio.com.br";
$mail->Port = 465; // ou 587
$mail->isHTML(true);
$mail->Username = "seuemail@seudominio.com";
$mail->Password = "suasenha";
$mail->setFrom("de@seudominio.com");
$mail->Subject = "Assunto do email";
$mail->Body = $html;
$mail->addAddress("para@dominio.com");
if (!$mail->Send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "<script>window.location='index.html'</script>";
}
