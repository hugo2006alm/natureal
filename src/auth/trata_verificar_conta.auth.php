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
$nome = $_SESSION['tmp_acc']['nome'];

$sql = "SELECT * FROM user WHERE email = '$email' OR username = '$user'";
$arrResultado = my_query($sql);
if (count($arrResultado) != 0) { /* validar se já existe o user */
    $sql = "INSERT INTO user (username, email, password, nome, foto) VALUES ('$user', '$email', '$pass', '$nome', '$pfp')";
    $conn = my_connect($arrConfig['$conn']);
    my_query($sql);
    
    unset($_SESSION['tmp_acc']);
    
}

header('Location: ' . $arrConfig['url_auth'] . 'login.php');




