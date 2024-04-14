<!DOCTYPE html>
<html lang="en" data-theme="lofi">
<link rel="stylesheet" href="../output.css">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entrar</title>
</head>

<body>
<?php 
if (isset($_GET['erro'])){
    if ($_GET['erro']==1){
        echo '<div class="w-screen flex justify-center items-center">
        <div role="alert" class="alert alert-error">
        <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
        <span>Erro! Utilizador não encontrado.</span>
      </div>
      </div>';
    } else if($_GET['erro']==2){
        echo '<div class="w-screen flex justify-center items-center">
        <div role="alert" class="alert alert-error">
        <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
        <span>Erro! Credenciais incorretas.</span>
      </div>
      </div>';  
    } 
   
}
?>
    
    <div class="card bg-base-100 shadow-xl flex justify-center h-screen w-screen">
        <figure class="px-10 pt-10 ">
            <img src="../../imgs/bird.jpg" alt="Bird" class="rounded-xl h-64" />
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
                <a href="recuperar_senha.php" class="link">Esqueci-me da palavra-passe</a>
            </form>
        </div>
    </div>


</body>

</html>