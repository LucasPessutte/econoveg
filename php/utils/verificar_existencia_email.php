<?php
include_once('../../conn/conexao.php');

$email = urldecode($_GET['email']);

$sql = "SELECT * FROM users WHERE email = '$email'";
$res = mysqli_query($conn, $sql);

if (mysqli_num_rows($res) == 0) {
  echo "OK";
} else {
  echo "FAIL";
}
