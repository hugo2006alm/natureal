<?php
    include 'include/config.inc.php';
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (isset($_FILES['photo']) && $_FILES['photo']['error'] == 0) {
            $user_id = $_SESSION['user_id'];
            $file_name = $_FILES['photo']['name'];
            $file_tmp = $_FILES['photo']['tmp_name'];
            $file_ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));

            



            // Segurança: Verificar os tipos de arquivo permitidos
            $allowed_ext = ['jpg', 'jpeg', 'png', 'gif'];


            if (in_array($file_ext, $allowed_ext)) {
                $new_file_name = "user_" . $user_id . "." . $file_ext; // Cria um nome de arquivo único
                if ($_FILES['photo']['error'] !== UPLOAD_ERR_OK) {
                    echo "Erro de upload: " . $_FILES['photo']['error']; // Isso vai imprimir um código de erro
                } else {
                        move_uploaded_file($file_tmp, $arrConfig['fotos'] . $new_file_name);
                        my_query("UPDATE user SET foto = '" . $new_file_name . "' WHERE id = '" . $user_id . "'");

                }
                
            }
        }
       // header('Location: settings.php');
    }else {
        $user_id = $_SESSION['user_id'];
        $user = my_query("SELECT * FROM user WHERE id = " . $user_id);
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
    <form action="settings.php" method="POST" enctype="multipart/form-data">
        <label for="username">Username:</label>
        <input type="text" name="username" required maxlength="30" value="<?php echo htmlspecialchars($user[0]['username']); ?>">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" required maxlength="30" value="<?php echo htmlspecialchars($user[0]['nome']); ?>">
        <label for="photo">Foto:</label>
        <img src="../public/users_pfp/<?php echo $user[0]['foto']?>" alt="" style="max-width:100px">
        <input type="file" name="photo">
        <button type="submit">Submeter</button>
    </form>
    <form action="end.php" method="POST">
        <button type="submit">Terminar Sessão</button>
    </form>
</body>
</html>
