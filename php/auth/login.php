<?php
session_start();

include_once("../../conn/conexao.php");
include_once('anti_injection.php');

$email = anti_injection($_REQUEST['login_email']);
$password = anti_injection($_REQUEST['login_password']);
// $password = hash('sha256', $password);

$sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
$res = mysqli_query($conn, $sql);

if(mysqli_num_rows($res) > 0){
    while($row = mysqli_fetch_array($res)){
        $_SESSION['zKFmdhEHixG9Ej'] = $row['id'];
        $_SESSION['name'] = $row['name'];
    }

    header('Location: ../../');
}else{
    header('Location: ../../login/');
    $_SESSION['msg'] = "<div class='ml-1 mr-1 mb-0 alert alert-danger'>Email ou senha incorretos</div>";
}