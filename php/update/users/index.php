<?php
session_start();
include_once('../../../conn/conexao.php');

$user_id = $_SESSION['zKFmdhEHixG9Ej'];

// FORM FIELDS
$name = $_POST['name_profile'];
$birth_date = $_POST['birth_date_profile'];

$sql = "UPDATE users SET name = '$name', birth_date = '$birth_date' WHERE id = $user_id";
$res = mysqli_query($conn, $sql);

header('Location: ../../../conteudos/perfil/');
