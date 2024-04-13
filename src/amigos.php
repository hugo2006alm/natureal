<?php include 'components/header.php';

$id_user = $_SESSION['user_id'];
$sql = "SELECT amigos.id AS id_amigo, amigos.estado AS estado, amigos.iduser AS id_user, amigos.iduser2 AS id_user2, user.* 
FROM amigos 
INNER JOIN user ON amigos.iduser2 = user.id 

WHERE iduser = $id_user OR iduser2 = $id_user";
$res = my_query($sql);
if(count($res) > 0) {
    $sql = "SELECT * FROM user WHERE id = {$res[0]['id_user']}";
    $res2 = my_query($sql);
}
?>

<form method="post" action="amigos/trata_envia_pedido.php">
    <input type="text" name="username" placeholder="Nome do amigo" />
    <input type="submit"  value="Solicitação">

</form>

<?php 

foreach($res as $k => $v) {
    if($v['estado'] == 0) {
        if(($v['id_user'] == $_SESSION['user_id'])) {
            echo '<span>' . $v['username'] . '</span><a href="amigos/trata_aceitar_convite.php?id='.$v['id_amigo'].'&tipo=remover">Remover</a>';
        } else if(($v['id_user2'] == $_SESSION['user_id'])) {            
            echo '<span>' . $res2[0]['username'] . '</span><a href="amigos/trata_aceitar_convite.php?id='.$v['id_amigo'].'&tipo=aceitar">Aceitar</a> | <a href="amigos/trata_aceitar_convite.php?id='.$v['id_amigo'].'&tipo=recusar">Remover</a>';
        }
        // tratar de pedidos de amizade
    } else {  
        if(($v['id_user2'] == $_SESSION['user_id'])) {                        
            echo '<span>' . $res2[0]['username'] . '</span><a href="amigos/trata_aceitar_convite.php?id='.$v['id_amigo'].'&tipo=remover">Remover</a>';
        } else {
            echo '<span>' . $v['username'] . '</span><a href="amigos/trata_aceitar_convite.php?id='.$v['id_amigo'].'&tipo=remover">Remover</a>';
        }      
    }
}
?>



<?php include 'components/footer.php'; ?>


