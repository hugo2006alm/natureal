<?php
    include 'include/config.inc.php';
    if($_SERVER['REQUEST_METHOD'] == 'POST'){

    }else{
        $user = my_query('SELECT * FROM user WHERE id = ' . $_SESSION['user_id']);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Settings</title>
</head>
<body>
    <form action="" method="POST" enctype="multipart/form-data">
        <label for="nome">Username:</label>
        <input type="text" required maxlength="30" value="<?php echo $user[0]['username']?>">
        <label for="nome">Nome:</label>
        <input type="text" required maxlength="30" value="<?php echo $user[0]['nome']?>">
        <label for="">Foto:</label>
        <img src="" alt="">
        <button type="submit">Submeter</button>
    </form>
</body>
</html>