<?php
include '../include/config.inc.php'; 


if (floatval($_GET['string']) < 0.7){
  //echo "not a bird.";
  //echo floatval($_GET['string']);

 header('Location: '.$arrConfig['url_site'].'/challenges.php?erro=1');
  die();
}




include $arrConfig['dir_site'].'/tarefas/pushtarefa.php';
if ($_GET['objetivo'] == 'objetivo1'){
  $c=0;
  $contagem = my_query("SELECT * FROM posts WHERE iduser = ".$_SESSION['user_id']." AND niveltarefa = 1");
  
  for ($i=0; $i<count($contagem); $i++){
    $data = $contagem[$i]['data'];
    $data = substr($data, 0, 10);
    
    if ($data == date('Y-m-d')){
         $c++;
        
    }
}
 if ($c > 0){
  header('Location: '.$arrConfig['url_site'].'/challenges.php');
  die();
  
 }
  my_query("INSERT INTO posts (iduser, foto, titulo, legenda, idtarefa, coordenadas, niveltarefa) VALUES ('".$_SESSION['user_id']."', '".$_GET['nomeoriginal']."', '".$reply[0]['titulo']."', '".$_GET['descricao']."', '".$_GET['idobjetivo1']."', '".$_GET['Posicao']."', 1)");
}else if ($_GET['objetivo'] == 'objetivo2'){
  $c2=0;
  $contagem2 = my_query("SELECT * FROM posts WHERE iduser = ".$_SESSION['user_id']." AND niveltarefa = 2");
  
  for ($i=0; $i<count($contagem2); $i++){
    $data = $contagem2[$i]['data'];
    $data = substr($data, 0, 10);
    
    if ($data == date('Y-m-d')){
         $c2++;
        
    }
}
 if ($c2 > 0){
  header('Location: '.$arrConfig['url_site'].'/challenges.php');
  die();
  
 }
  my_query("INSERT INTO posts (iduser, foto, titulo, legenda, idtarefa, coordenadas, niveltarefa) VALUES ('".$_SESSION['user_id']."', '".$_GET['nomeoriginal']."', '".$reply[1]['titulo']."', '".$_GET['descricao']."', '".$_GET['idobjetivo2']."', '".$_GET['Posicao']."', 2)");
}else if ($_GET['objetivo'] == 'objetivo3'){
  $c3=0;
  $contagem3 = my_query("SELECT * FROM posts WHERE iduser = ".$_SESSION['user_id']." AND niveltarefa = 3");
  
  for ($i=0; $i<count($contagem3); $i++){
    $data = $contagem3[$i]['data'];
    $data = substr($data, 0, 10);
    
    if ($data == date('Y-m-d')){
         $c3++;
        
    }
}
 if ($c3 > 0){
  header('Location: '.$arrConfig['url_site'].'/challenges.php');
  die();
  
 }
  my_query("INSERT INTO posts (iduser, foto, titulo, legenda, idtarefa, coordenadas, niveltarefa) VALUES ('".$_SESSION['user_id']."', '".$_GET['nomeoriginal']."', '".$reply[2]['titulo']."', '".$_GET['descricao']."', '".$_GET['idobjetivo3']."', '".$_GET['Posicao']."', 3)");
    }

    header('Location: '.$arrConfig['url_site']);