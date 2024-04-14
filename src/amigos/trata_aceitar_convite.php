<?php include '../include/config.inc.php';
$tipo = $_GET['tipo'];
if($tipo == 'aceitar') {
    //aceitou
    $sql = "UPDATE amigos SET estado = 1 WHERE id = " . $_GET['id'];
    my_query($sql);
    header('Location: ../friends.php');
} else {
    //recusou
    $sql = "DELETE FROM amigos WHERE id = " . $_GET['id'];
    my_query($sql);
    header('Location: ../friends.php');

}
