<?php include '../include/config.inc.php';

$codigo = $_POST['codigo'];
if($codigo != $_SESSION['codigo']) {
    $_SESSION['erro'] = 'Código inválido';
    header('Location: ../auth/verificar_email.php');
    exit;

}

$user = $_SESSION['tmp_acc']['user'];
$email = $_SESSION['tmp_acc']['email'];
$pass = $_SESSION['tmp_acc']['pass'];
$pfp = $_SESSION['tmp_acc']['foto'];

$sql = "INSERT INTO user (username, email, password, pfp, ativo) VALUES ('$user', '$email', '$pass', '$pfp', 1)";
my_query($sql);

unset($_SESSION['tmp_acc']);
header('Location: ' . $arrConfig['url_paginas'] . 'auth/login.php');




