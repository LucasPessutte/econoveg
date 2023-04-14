<?php
session_start();
include_once('../../../conn/conexao.php');

// FORM FIELDS
if ($_FILES["profile_picture"]["tmp_name"] != "") {
    $profile_picture = file_get_contents($_FILES["profile_picture"]["tmp_name"]);
    $profile_picture = base64_encode($profile_picture);
} else {
    $profile_picture = "";
}

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
// $password = hash('sha256', $password);
$document = $_POST['document'];
$birth_date = $_POST['birth_date'];

$sql = "INSERT INTO users (name, email, password, document, birth_date, profile_pic, terms) 
    VALUES('$name', '$email', '$password', '$document','$birth_date', '$profile_picture', 1)";
$res = mysqli_query($conn, $sql);

if ($res) {
    header('Location: ../../../login/');

    $_SESSION['msg'] = "<div class='ml-1 mr-1 mb-0 alert alert-success'>Usuário cadastrado com sucesso</div>";
} else {
    header('Location: ../../../cadastro/');
    echo $sql;
    $_SESSION['msg'] = "<div class='ml-1 mr-1 mb-0 alert alert-danger'>Não foi possível cadastrar-se</div>";
}
