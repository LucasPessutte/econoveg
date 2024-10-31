<?php
$host = "localhost";
$user = "root";
$password = "Pessutte$48120";
$db = "u995521796_econoveg";

try {
    $conn = mysqli_connect($host, $user, $password, $db);
} catch (Exception $e) {
    // echo "Erro ao conectar no banco";
    exit(header("Location: ../404.php"));
}
