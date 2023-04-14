<?php
require_once("PHPMailerAutoload.php");
$confirmation_code = $_GET['confirmation_code'];
$email = $_GET['email'];

$mail = new PHPMailer();

$mail->CharSet = 'UTF-8';

$mail->isSMTP();

$mail->SMTPOptions = array(
  'ssl' => array(
    'verify_peer' => false,
    'verify_peer_name' => false,
    'allow_self_signed' => true
  )
);

$mail->SMTDebug = 2;

$mail->Host = "smtp.hostinger.com.br";
$mail->SMTPSecure = "tls";
$mail->Port = 587;

$mail->SMTPAuth = True;

$mail->Username = 'equipeanalisaitape@twicedev.tech';
$mail->Password = 'Analisaitape@2022';

$mail->isHtml(true);
$mail->setFrom('equipeanalisaitape@twicedev.tech', 'Cadastro AnalisaItapê');
$mail->addAddress($email);
$mail->Subject = 'Código de confirmação: ' . $confirmation_code;
$mail->Body = "Não responda esse email";

if ($mail->send()) {
  echo "OK";
} else {
  echo "FAIL";
}
