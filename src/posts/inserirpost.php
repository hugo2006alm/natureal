<?php
include '../include/config.inc.php'; 


if (floatval($_GET['string']) < 0.7){
  echo "not a bird.";
  echo floatval($_GET['string']);

 header('Location: '.$arrConfig['url_site'].'/challenges.php');
  die();
}
else if (floatval($_GET['string']) >= 0.7){
  echo "bird.";
  echo floatval($_GET['string']);


}

include $arrConfig['dir_site'].'/tarefas/pushtarefa.php';
if ($_GET['objetivo'] == 'objetivo1'){
  $queryverificar = my_query("SELECT COUNT(*) as total FROM posts WHERE idtarefa = 1 AND iduser = '".$_SESSION['user_id']."'");
  if ($queryverificar[0]['total'] > 0){
   // header('Location: '.$arrConfig['url_site'].'/challenges.php');
    die();
  }
  my_query("INSERT INTO posts (iduser, foto, titulo, legenda, idtarefa, coordenadas) VALUES ('".$_SESSION['user_id']."', '".$_GET['nomeoriginal']."', '".$reply[0]['titulo']."', '".$_GET['descricao']."', '".$_GET['idobjetivo1']."', '".$_GET['Posicao']."')");
}else if ($_GET['objetivo'] == 'objetivo2'){
  $queryverificar2 = my_query("SELECT COUNT(*) as total FROM posts WHERE idtarefa = 2 AND iduser = '".$_SESSION['user_id']."'");
  if ($queryverificar2[0]['total'] > 0){
    //header('Location: '.$arrConfig['url_site'].'/challenges.php');
    die();
  }
  my_query("INSERT INTO posts (iduser, foto, titulo, legenda, idtarefa, coordenadas) VALUES ('".$_SESSION['user_id']."', '".$_GET['nomeoriginal']."', '".$reply[1]['titulo']."', '".$_GET['descricao']."', '".$_GET['idobjetivo2']."', '".$_GET['Posicao']."')");
}else if ($_GET['objetivo'] == 'objetivo3'){
  $queryverificar3 = my_query("SELECT COUNT(*) as total FROM posts WHERE idtarefa = 3 AND iduser = '".$_SESSION['user_id']."'");
  if ($queryverificar3[0]['total'] > 0){
    //header('Location: '.$arrConfig['url_site'].'/challenges.php');
    die();
  }
  my_query("INSERT INTO posts (iduser, foto, titulo, legenda, idtarefa, coordenadas) VALUES ('".$_SESSION['user_id']."', '".$_GET['nomeoriginal']."', '".$reply[2]['titulo']."', '".$_GET['descricao']."', '".$_GET['idobjetivo3']."', '".$_GET['Posicao']."')");
    }

    header('Location: '.$arrConfig['url_site']);