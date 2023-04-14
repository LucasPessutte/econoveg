<?php
session_start();
include_once('../../../conn/conexao.php');

$tkn = $_POST['tkn'];

// FORM FIELDS
$new_password = $_POST['new_password'];
$new_password_ok = $_POST['new_password_ok'];

// $password = hash('sha256', $new_password);
$password = $new_password;

if ($new_password == $new_password_ok) {
    $sql = "SELECT id FROM users WHERE token = '$tkn'";
    $res = mysqli_query($conn, $sql);

    while ($row = mysqli_fetch_array($res)) {
        $user_id = $row['id'];
    }

    $sql = "UPDATE users SET password = '$password' WHERE id = $user_id";
    $res = mysqli_query($conn, $sql);

    if ($res) {
        echo $sql = "UPDATE users SET token = NULL WHERE id = $user_id";
        $res = mysqli_query($conn, $sql);

        header('Location: ../../../login/');
        $_SESSION['msg'] = "<div class='ml-1 mr-1 mb-0 alert alert-success'>Senha alterada com sucesso</div>";
    } else {
        header('Location: ../../../login/');
        $_SESSION['msg'] = "<div class='ml-1 mr-1 mb-0 alert alert-danger'>Não foi alterar a senha</div>";
    }
} else {
    header('Location: ../../../login/');
    echo $sql;
    $_SESSION['msg'] = "<div class='ml-1 mr-1 mb-0 alert alert-danger'>As senhas não conferem</div>";
}
