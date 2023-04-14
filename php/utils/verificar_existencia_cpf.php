<?php
include_once('../../conn/conexao.php');

$document = urldecode($_GET['doc']);

$sql = "SELECT * FROM users WHERE document = '$document'";
$res = mysqli_query($conn, $sql);

if (mysqli_num_rows($res) == 0) {
  echo "OK";
} else {
  echo "FAIL";
}
