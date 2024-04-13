<?php include '../include/config.inc.php';

print($_POST['username']);
$username = $_POST['username'];
$sql = "SELECT * FROM user WHERE username = '$username'";
$res = my_query($sql);
if($res[0]['id'] == $_SESSION['user_id']) {
    echo 'nao se pode convidar a si próprio';
    die();
}
if(count($res) == 0) {
    echo 'Utilizador não encontrado';    
    die();
}

$id_user = $_SESSION['user_id'];
$id_amigo = $res[0]['id'];
$sql = "SELECT * FROM amigos WHERE (iduser = $id_user AND iduser2 = $id_amigo) OR (iduser = $id_amigo AND iduser2 = $id_user)";
$res = my_query($sql);
if(count($res) > 0) {
    echo 'já existe um pedido';
    die();
} 
$sql = "INSERT INTO amigos (iduser, iduser2, estado) VALUES ($id_user, $id_amigo, 0)";
my_query($sql);
echo 'Pedido enviado';

header('Location: ../friends.php');