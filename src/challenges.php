<?php 
include 'components/header.php';

$_SESSION['user_name']='kodin';
$_SESSION['user_id']= '1';

if (!isset($_SESSION['user_name'])){
    header('Location: '.$arrConfig['dir_site'].'/auth/login.php');
    die();
}

$queryverificar = my_query('SELECT COUNT(*) AS total FROM posts WHERE iduser = '.$_SESSION['user_id']);

if ($queryverificar[0]['total']>0){
   $queryverificar2= my_query('SELECT * FROM posts WHERE iduser = '.$_SESSION['user_id']);
   for ($i=0; $i<$queryverificar[0]['total']; $i++){
       $data = $queryverificar2[$i]['data'];
       $data = substr($data, 0, 10);
       if ($data == date('Y-m-d')){
           echo 'Você já postou hoje';
          include 'components/footer.php';
           die();
       }
   }


}


include $arrConfig['dir_site'].'/src/tarefas/pushtarefa.php';

if ($queryverificar[0]['total']>0){
   $queryverificar2= my_query('SELECT * FROM posts WHERE iduser = '.$_SESSION['user_id']);
   for ($i=0; $i<$queryverificar[0]['total']; $i++){
       $data = $queryverificar2[$i]['data'];
       $data = substr($data, 0, 10);
       if ($data == date('Y-m-d')){
           echo 'Você já postou hoje';
          include 'components/footer.php';
           die();
       }
   }


}


include $arrConfig['dir_site'].'/src/tarefas/pushtarefa.php';

?>

<form action="./posts/trata_post.php" method="post" enctype="multipart/form-data">
<input type="radio" name="objetivo" value="objetivo1" required>
<label for="objetivo1"><?php echo $reply[0]['titulo'] ?></label><br>
<img width="30%" src="<?php echo $arrConfig['url_site'].'/src/uploads/tarefas/'. $reply[0]['foto'] ?>" alt="">

<input type="radio" name="objetivo" value="objetivo2">
<label for="objetivo2"><?php echo $reply[1]['titulo'] ?></label><br>
<img width="30%" src="<?php echo $arrConfig['url_site'].'/src/uploads/tarefas/'. $reply[1]['foto'] ?>" alt="">

<input type="radio" name="objetivo" value="objetivo3">
<label for="objetivo3"><?php echo $reply[2]['titulo'] ?></label><br><br>
<img width="30%" src="<?php echo $arrConfig['url_site'].'/src/uploads/tarefas/'. $reply[2]['foto'] ?>" alt="">

        <input type="radio" name="objetivo" value="objetivo2">
        <label for="objetivo2"><?php echo $reply[1]['titulo'] ?></label><br>

        <input type="radio" name="objetivo" value="objetivo3">
        <label for="objetivo3"><?php echo $reply[2]['titulo'] ?></label><br><br>

        <input type="hidden" name="idobjetivo1" value="<?php echo $reply[0]['id'] ?>">
        <input type="hidden" name="idobjetivo2" value="<?php echo $reply[1]['id'] ?>">
        <input type="hidden" name="idobjetivo3" value="<?php echo $reply[2]['id'] ?>">
        <input type="hidden" id="Posicao" name="Posicao" value="indefinido">

        <label for="descricao">Descrição</label>
        <input type="text" name="descricao"><br><br>


        <input type="file" name="foto" required><br><br>


        <button type="submit">Upload</button>

    </form>
</div>


<?php include 'components/footer.php'; ?>