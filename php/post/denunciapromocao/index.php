<?php
session_start();
include_once('../../../conn/conexao.php');

$id_product_complaint = $_POST['id_product_complaint'];
$motive = $_POST['complaint_motive'];
$description_motive = $_POST['description_motive'];

$sql = "INSERT INTO products_complaints(product_id, complaint_motive, description) VALUES ($id_product_complaint, '$motive', '$description_motive')";
$res = mysqli_query($conn, $sql);

header('Location: ../../../index.php');