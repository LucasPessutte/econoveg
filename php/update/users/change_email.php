<?php
session_start();
include_once('../../../conn/conexao.php');

// FORM FIELDS
$token = $_POST['tkn'];
$email = $_POST['new_email'];

$sql = "UPDATE users SET email = '$email' WHERE token_email = '$token'";
$res = mysqli_query($conn, $sql);

if ($res) {
    $sql = "UPDATE users SET token_email = NULL WHERE token_email = '$token'";
    $res = mysqli_query($conn, $sql);

    if ($res) {
        unset($_SESSION['zKFmdhEHixG9Ej']);
        header('Location: ../../../login/');
    } else {
        unset($_SESSION['zKFmdhEHixG9Ej']);
        header('Location: ../../../login/');
    }
} else {
    unset($_SESSION['zKFmdhEHixG9Ej']);
    header('Location: ../../../login/');
}
