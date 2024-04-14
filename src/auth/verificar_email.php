<?php include '../include/config.inc.php'; 
?>

<!DOCTYPE html>
<html lang="en" data-theme="lofi">
<link rel="stylesheet" href="../output.css">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificar Email</title>
</head>
<body>
    
<div class="card w-96 bg-base-100 shadow-xl flex justify-center h-screen">
        <figure class="px-10 pt-10 ">
            <img src="../../imgs/bird2.jpg" alt="Shoes" class="rounded-xl h-64" />
        </figure>
        <div class="card-body items-center text-center">
            <h2 class="card-title mb-6">Verificar conta</h2>
            <form action="trata_verificar_conta.auth.php" method="post">
                <input type="text" name="codigo" id="codigo" class="input input-bordered w-full max-w-xs mb-6"
                placeholder="Insira o código enviado para o seu email">
                <input type="submit" value="Verificar" class="btn btn-primary w-[45%] mb-3">
            </form>
            <a href="registo.php" class="link">Voltar</a>

        </div>
    </div> 
</body>
</html>