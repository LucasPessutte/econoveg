<?php
include_once('../../conn/conexao.php');

$token = $_GET['token'];
$email = $_GET['email'];

$sql = "UPDATE users SET token_email = '$token' WHERE email = '$email'";
$res = mysqli_query($conn, $sql);

if ($res) {
  echo "OK";
} else {
  echo "FAIL";
}
