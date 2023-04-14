<?php
session_start();
include_once('../../../conn/conexao.php');

$user_id = $_SESSION['zKFmdhEHixG9Ej'];
// FORM FIELDS
if ($_FILES["profile_picture"]["tmp_name"] != "") {
    $profile_picture = file_get_contents($_FILES["profile_picture"]["tmp_name"]);
    $profile_picture = base64_encode($profile_picture);
} else {
    $sql = "SELECT profile_pic FROM users WHERE id = $user_id";
    $res = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_array($res)){
        $profile_picture = $row['profile_pic'];
    }
}

$sql = "UPDATE users SET profile_pic = '$profile_picture' WHERE id = $user_id";
$res = mysqli_query($conn, $sql);

header('Location: ../../../conteudos/perfil/');

