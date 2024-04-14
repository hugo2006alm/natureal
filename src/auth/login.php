<?php
include '../include/config.inc.php';
?>
<!DOCTYPE html>
<html lang="en" data-theme="lofi">
<link rel="stylesheet" href="../output.css">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entrar</title>
</head>

<body>
    <div class="card w-96 bg-base-100 shadow-xl flex justify-center h-screen">
        <figure class="px-10 pt-10 ">
            <img src="../../imgs/bird.jpg" alt="Shoes" class="rounded-xl h-64" />
        </figure>
        <div class="card-body items-center text-center">
            <h2 class="card-title mb-6">NatuReal</h2>
            <form method="post" action="trata_login.auth.php">
                <input type="text" name="login" id="login" placeholder="Email ou nome de utilizador" required
                    class="input input-bordered w-full max-w-xs mb-6">
                <input type="password" name="password" id="password" placeholder="Palavra-passe" required
                    class="input input-bordered w-full max-w-xs mb-6">
                <div class="card-actions justify-between">
                    <button type="submit" class="btn btn-primary w-[45%] mb-3">Entrar</button>
                    <a href="registo.php" class="btn btn-outline w-[45%] mb-3">Criar Conta</a>
                </div>
                <a href="recuperar_senha.php" class="link">Esqueci-me palavra-passe</a>
            </form>
        </div>
    </div>


</body>

</html>