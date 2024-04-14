<!DOCTYPE html>
<html lang="en" data-theme="lofi">
<link rel="stylesheet" href="../output.css">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
</head>

<body>
    <div class="card w-screen bg-base-100 shadow-xl flex justify-center items-center h-screen">
        <div class="card-body justify-center items-center text-center">
            <h2 class="card-title mb-6">Crie Conta</h2>
            <form method="post" action="trata_registo.auth.php">
                <input required type="text" name="nome" id="nome" placeholder="Nome" class="input input-bordered w-full max-w-xs mb-6">
                <input required type="text" name="user" id="user" placeholder="Nome de utilizador" class="input input-bordered w-full max-w-xs mb-6">
                <input required type="text" name="email" id="email" placeholder="Email" class="input input-bordered w-full max-w-xs mb-6">
                <input required type="password" name="pass" id="password" placeholder="Palavra-passe" class="input input-bordered w-full max-w-xs mb-6">
                <input required type="password" name="confirmar_pass" id="confirmar_pass"
                    placeholder="Confirmar palavra-passe" class="input input-bordered w-full max-w-xs mb-6">
                <button type="submit" class="btn btn-primary w-[45%] mb-3">Criar</button>
            </form>
            <a href="login.php" class="link">Voltar</a>
        </div>
    </div>

</body>

</html>