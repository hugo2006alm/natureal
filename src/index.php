<?php include 'components/header.php';
include '../src/include/config.inc.php';?>

<?php 

$_SESSION['user_name']='kodin';

if (!isset($_SESSION['user_name'])){
    header('Location: '.$arrConfig['dir_site'].'/src/auth/login.php');
    die();
}

include $arrConfig['dir_site'].'/src/tarefas/pushtarefa.php';

?>

<div>
    <h1>Objetivos do dia</h1><br>

    

<form action="./posts/trata_post.php" method="post" enctype="multipart/form-data">
<input type="radio" name="objetivo" value="objetivo1" required>
<label for="objetivo1"><?php echo $reply[0]['titulo'] ?></label><br>

<input type="radio" name="objetivo" value="objetivo2">
<label for="objetivo2"><?php echo $reply[1]['titulo'] ?></label><br>

<input type="radio" name="objetivo" value="objetivo3">
<label for="objetivo3"><?php echo $reply[2]['titulo'] ?></label><br><br>

<input type="file" name="foto" required><br><br>

<button type="submit">Upload</button>

</form>
</div>




<?php include 'components/footer.php';?>