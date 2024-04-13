<?php
include '../include/config.inc.php';
include $arrConfig['dir_components'] . 'header.php';
?>

<form action="">
    <input type="text" name="email" id="email" placeholder="Email">
    <input type="password" name="password" id="password" placeholder="Password">
    <input type="submit">
</form>

<?php include $arrConfig['dir_components'] . 'footer.php';?>