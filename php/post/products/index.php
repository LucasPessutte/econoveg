<?php
session_start();
include_once('../../../conn/conexao.php');

if ($_FILES["product_image"]["tmp_name"] != "") {
    $product_pic = file_get_contents($_FILES["product_image"]["tmp_name"]);
    $product_pic = base64_encode($product_pic);
} else {
    $product_pic = "";
}

$user_id = $_SESSION['zKFmdhEHixG9Ej'];
$title = $_POST['title'];
$description = $_POST['description'];
$old_price = $_POST['old_price'];
$price = $_POST['price'];
$establishment_name = $_POST['establishment_name'];
$cep = $_POST['cep'];
$street = $_POST['street'];
$neighborhood = $_POST['neighborhood'];
$city = $_POST['city'];
$state = $_POST['state'];
$number = $_POST['number'];

$sql = "INSERT INTO products (title, description, old_price, price, product_pic, establishment_name, cep, street, number, neighborhood, city, state, user_id) 
    VALUES('$title', '$description', '$old_price', '$price', '$product_pic', '$establishment_name', '$cep', '$street', '$number', '$neighborhood', '$city', '$state', $user_id)";

$res = mysqli_query($conn, $sql);

if ($res) {
    $_SESSION['msg'] = "<div class='ml-1 mr-1 mb-0 alert alert-success'>Produto cadastrado com sucesso</div>";
} else {
    echo $sql;
    $_SESSION['msg'] = "<div class='ml-1 mr-1 mb-0 alert alert-danger'>Não foi possível cadastrar o produto</div>";
}

header('Location: ../../../index.php');

