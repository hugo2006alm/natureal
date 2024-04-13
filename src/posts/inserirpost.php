<?php
include $arrConfig['dir_site'].'/tarefas/pushtarefa.php';
if ($_POST['objetivo'] == 'objetivo1'){
  my_query("INSERT INTO posts (iduser, foto, titulo, legenda, idtarefa, coordenadas) VALUES ('".$_SESSION['user_id']."', '".$nomeoriginal."', '".$reply[0]['titulo']."', '".$_POST['descricao']."', '".$_POST['idobjetivo1']."', '".$_POST['Posicao']."')");
}else if ($_POST['objetivo'] == 'objetivo2'){
  my_query("INSERT INTO posts (iduser, foto, titulo, legenda, idtarefa, coordenadas) VALUES ('".$_SESSION['user_id']."', '".$nomeoriginal."', '".$reply[1]['titulo']."', '".$_POST['descricao']."', '".$_POST['idobjetivo2']."', '".$_POST['Posicao']."')");
}else if ($_POST['objetivo'] == 'objetivo3'){
  my_query("INSERT INTO posts (iduser, foto, titulo, legenda, idtarefa, coordenadas) VALUES ('".$_SESSION['user_id']."', '".$nomeoriginal."', '".$reply[2]['titulo']."', '".$_POST['descricao']."', '".$_POST['idobjetivo3']."', '".$_POST['Posicao']."')");
    }