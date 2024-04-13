<?php

include '../include/config.inc.php';


$query = my_query("SELECT COUNT(*) AS total FROM likes WHERE iduser = ".$_POST['iduser']." AND idpost = ".$_POST['idpost']);

if ($query[0]['total']>0){
    $querytipo = my_query("SELECT tipo FROM likes WHERE iduser = ".$_POST['iduser']." AND idpost = ".$_POST['idpost']);
    my_query("DELETE FROM likes WHERE iduser = ".$_POST['iduser']." AND idpost = ".$_POST['idpost']);
    if ($querytipo[0]['tipo']==0){
        my_query("INSERT INTO likes (iduser, idpost, tipo) VALUES (".$_POST['iduser'].",".$_POST['idpost'].", 1)");

    }
       
   
}else{
    my_query("INSERT INTO likes (iduser, idpost, tipo) VALUES (".$_POST['iduser'].",".$_POST['idpost'].", 1)");
}



$totallikes = my_query("SELECT COUNT(*) AS total FROM likes WHERE idpost = ".$_POST['idpost']." AND tipo=1");
$totaldeslikes = my_query("SELECT COUNT(*) AS total FROM likes WHERE idpost = ".$_POST['idpost']." AND tipo=0");

$data = array("likes"=>$totallikes[0]['total'], "deslikes"=> $totaldeslikes[0]['total']); 
echo json_encode($data);
exit(0);
