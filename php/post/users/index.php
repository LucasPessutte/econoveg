<?php
session_start();
include_once('../../../conn/conexao.php');

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$phone = $_POST['phone'];
$cep = $_POST['cep'];
$street = $_POST['street'];
$neighborhood = $_POST['neighborhood'];
$city = $_POST['city'];
$state = $_POST['state'];
$number = $_POST['number'];

$sql = "INSERT INTO users (name, email, password, phone, cep, street, number, neighborhood, city, state) 
    VALUES('$name', '$email', '$password', '$phone','$cep', '$street', '$number', '$neighborhood', '$city', '$state')";

print_r($sql);
$res = mysqli_query($conn, $sql);

if ($res) {
    header('Location: ../../../login/');
    $_SESSION['msg'] = "<div class='ml-1 mr-1 mb-0 alert alert-success'>Usuário cadastrado com sucesso</div>";
} else {
    header('Location: ../../../cadastro/');
    echo $sql;
    $_SESSION['msg'] = "<div class='ml-1 mr-1 mb-0 alert alert-danger'>Não foi possível cadastrar-se</div>";
}
