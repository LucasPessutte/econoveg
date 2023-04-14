<?php
session_start();
require_once("PHPMailerAutoload.php");
include_once('../../conn/conexao.php');

$token =  hash('sha256', rand(5, 15));
$email =  $_GET['email'];

$sql = "UPDATE users SET token = '$token' WHERE email = '$email'";
$res = mysqli_query($conn, $sql);

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
$mail->setFrom('equipeanalisaitape@twicedev.tech', 'Nova senha AnalisaItapê');
$mail->addAddress($email);
$mail->Subject = 'Entre no link para atualizar sua senha';
$mail->Body = "Use o link abaixo para alterar sua senha: <a target='_blank'>http://localhost/webanalisaitape/novaSenha?tkn=$token</a>";

if ($mail->send()) {
  echo "OK";

  // se vier do "esqueci minha senha"
  if(isset($_GET['esq'])){

    $_SESSION['msg'] = "<div class='ml-1 mr-1 mb-0 alert alert-success'>Recuperação de senha enviada com sucesso</div>";
    header('Location: ../../login/');
  }
} else {
  echo "FAIL";
  
  // se vier do "esqueci minha senha"
  if(isset($_GET['esq'])){
    $_SESSION['msg'] = "<div class='ml-1 mr-1 mb-0 alert alert-success'>Recuperação de senha não foi enviada</div>";
    header('Location: ../../esqueciMinhaSenha/');
  }
}
