<?php
    include 'components/header.php';
    
    $user_id = $_SESSION['user_id'];
    $user = my_query("SELECT * FROM user WHERE id = " . $user_id);

    
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (isset($_FILES['photo']) && $_FILES['photo']['error'] == 0) {
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
                        move_uploaded_file($file_tmp, $arrConfig['dir_site'] .'/uploads/'. $new_file_name);
                        my_query("UPDATE user SET foto = '" . $new_file_name . "' WHERE id = '" . $user_id . "'");

                }
                
            }

        }
if ($_POST['password'] != $user[0]['password']){   
    $pass = password_hash($_POST['password'], PASSWORD_DEFAULT); 
        my_query('UPDATE user SET password =  "'. $pass .'" WHERE id = '. $user_id);

}

        my_query('UPDATE user SET username =  "'. $_POST['username'] .'" , nome = "'. $_POST['nome'] .'" , email = "'. $_POST['email'] .'" WHERE id = '. $user_id);
        
    }
?>
    <div class="w-screen flex flex-col justify-center items-center mb-7">
        <h1 class="text-primary text-4xl font-black mt-6">Definições</h1>
        <h2 class="text-primary text-2xl font-bold mt-6">Editar Conta</h2>
    </div>
    <form action="settings.php" method="POST" enctype="multipart/form-data" class="flex flex-col justify-center items-center w-screen [&>*]:mb-3 last:mb-0">
        <input class="input input-bordered w-full max-w-xs" placeholder="Username" type="text" name="username" required maxlength="30" value="<?php echo htmlspecialchars($user[0]['username']); ?>">
        <input class="input input-bordered w-full max-w-xs" placeholder="Nome" type="text" name="nome" required maxlength="30" value="<?php echo htmlspecialchars($user[0]['nome']); ?>">
        <input class="input input-bordered w-full max-w-xs" placeholder="Email" type="email" name="email" required  value="<?php echo htmlspecialchars($user[0]['email']); ?>">
        <input class="input input-bordered w-full max-w-xs" placeholder="Password" type="password" name="password" required  value="<?php echo htmlspecialchars($user[0]['password']); ?>">
        <img id="file-image" src="<?php echo $arrConfig['url_site'] .'/uploads/'. $user[0]['foto']?>" alt="" class="max-w-xs rounded-md">
        <input id="file" class="file-input file-input-bordered w-full max-w-xs" type="file" name="photo">
        <button class="btn btn-primary w-full max-w-xs" type="submit">Submeter</button>
    </form>
    <form action="end.php" method="POST" class="flex flex-col justify-center items-center w-screen">
        <button class="btn btn-link" type="submit">Terminar Sessão</button>
    </form>

    <script>
        document.getElementById('file').addEventListener('change', function() {
            var file = this.files[0];
            var fileimage = document.getElementById('file-image');
            if (file) {
                var reader = new FileReader();
                reader.onload = function() {
                    fileimage.src = reader.result;
                }
                reader.readAsDataURL(file);
            }
        });
    </script>
    
<?php
    include 'components/footer.php';
?>
