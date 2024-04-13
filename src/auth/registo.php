<?php include '../include/config.inc.php';
include $arrConfig['dir_components'] . 'header.php';
echo $_SESSION['erro'];
?>

<form method="post" action="trata_registo.auth.php">
    <input required type="text" name="nome" id="nome" placeholder="Nome">
    <input required type="text" name="user" id="user" placeholder="User">
    <input required type="text" name="email" id="email" placeholder="Email">
    <input required type="password" name="pass" id="password" placeholder="Password">
    <input required type="password" name="confirmar_pass" id="confirmar_pass" placeholder="Confirmar Password">
    <input type="submit">
</form>

<?php include $arrConfig['dir_components'] . 'footer.php';?>