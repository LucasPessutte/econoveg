<?php
session_start();
include_once('../../../conn/conexao.php');

if ($_FILES["product_image_edit"]["tmp_name"] != "") {
    $product_pic = file_get_contents($_FILES["product_image_edit"]["tmp_name"]);
    $product_pic = base64_encode($product_pic);
} else {
    $product_pic = $_POST['old_image_edit'];
}

$id = $_POST['id_edit'];
$user_id = $_SESSION['zKFmdhEHixG9Ej'];
$title = $_POST['title_edit'];
$description = $_POST['description_edit'];
$old_price = $_POST['old_price_edit'];
$price = $_POST['price_edit'];
$establishment_name = $_POST['establishment_name_edit'];
$cep = $_POST['cep_edit'];
$street = $_POST['street_edit'];
$neighborhood = $_POST['neighborhood_edit'];
$city = $_POST['city_edit'];
$state = $_POST['state_edit'];
$number = $_POST['number_edit'];

$sql = "UPDATE products SET 
    title = '$title', 
    description = '$description', 
    old_price = '$old_price', 
    price = '$price', 
    product_pic = '$product_pic', 
    establishment_name = '$establishment_name', 
    cep = '$cep', 
    street = '$street', 
    number = '$number', 
    neighborhood = '$neighborhood', 
    city = '$city', 
    state = '$state', 
    user_id = $user_id 
WHERE id = $id";
$res = mysqli_query($conn, $sql);

header('Location: ../../../conteudos/minhasPromocoes/index.php');

