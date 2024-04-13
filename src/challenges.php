<?php include 'components/header.php';include '../src/include/config.inc.php';?>

<?php 

$_SESSION['user_name']='kodin';
$_SESSION['user_id']= '1';

if (!isset($_SESSION['user_name'])){
    header('Location: '.$arrConfig['dir_site'].'/src/auth/login.php');
    die();
}

include $arrConfig['dir_site'].'/src/tarefas/pushtarefa.php';

?>

<div>
    <h1>Objetivos do dia</h1><br>

    <script type="text/javascript">
        document.eve
    function getLocationConstant() {
    
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(onGeoSuccess, onGeoError);
        } else {
            alert("Your browser or device doesn't support Geolocation");
        }
    }

    // If we have a successful location update
    function onGeoSuccess(event) {
      
        document.getElementById("Posicao").value = event.coords.latitude + ", " + event.coords.longitude;

    }

    // If something has gone wrong with the geolocation request
    function onGeoError(event) {
        alert("Error code " + event.code + ". " + event.message);
    }
</script>

<form action="./posts/trata_post.php" method="post" enctype="multipart/form-data">
<input type="radio" name="objetivo" value="objetivo1" required>
<label for="objetivo1"><?php echo $reply[0]['titulo'] ?></label><br>

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


<?php include 'components/footer.php';?>