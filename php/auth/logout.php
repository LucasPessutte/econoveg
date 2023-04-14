<?php
session_start();
include_once("../../conn/conexao.php");

unset($_SESSION['zKFmdhEHixG9Ej']);
unset($_SESSION['name']);
// session_destroy();

exit(header('Location: ../../login/'));
