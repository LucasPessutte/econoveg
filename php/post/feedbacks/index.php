<?php
session_start();
include_once('../../../conn/conexao.php');

$email = $_POST['email'] != "" ? "'" . $_POST['email'] . "'" : "NULL";
$titulo = $_POST['titulo'] != "" ? "'" . $_POST['titulo'] . "'" : "NULL";
$comentario = $_POST['comentario'];

$sql = "INSERT INTO feedbacks(email, title, feedback) VALUES ($email, $titulo, '$comentario')";
$res = mysqli_query($conn, $sql);

if ($res) {
    echo "OK";
} else {
    echo "FAIL";
}
