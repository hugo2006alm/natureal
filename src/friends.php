<?php include 'components/header.php'; 

$id_user = $_SESSION['user_id'];
$sql = "SELECT amigos.id AS id_amigo, amigos.estado AS estado, amigos.iduser AS id_user, amigos.iduser2 AS id_user2, user.* 
FROM amigos 
INNER JOIN user ON amigos.iduser2 = user.id 

WHERE iduser = $id_user OR iduser2 = $id_user";
$res = my_query($sql);
if(count($res) > 0) {
    $sql = "SELECT * FROM user WHERE id = {$res[0]['id_user']}";
    $res2 = my_query($sql);
}
?>

<?php 
if (isset($_GET['erro'])){
    if ($_GET['erro']==1){
        echo '<div role="alert" class="alert alert-error">
        <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
        <span>Erro! Você não pode enviar um convite para si próprio.</span>
      </div>';
    } else if($_GET['erro']==2){
        echo '<div role="alert" class="alert alert-error">
        <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
        <span>Erro! Utilizador não encontrado.</span>
      </div>';  
    } else if($_GET['erro']==3){
        echo '<div role="alert" class="alert alert-error">
    <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
    <span>Erro! Já existe um pedido pendente para este utilizador.</span>
  </div>';
    }
   
}
?>

<div class="w-screen h-[60px] flex justify-between items-center px-3 bg-transparent sticky top-0 z-1">
    <h1 class="text-2xl font-bold text-primary">Amigos</h1>
    <label for="friendsModal" class="btn btn-circle bg-primary text-white"><svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-plus"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 5l0 14" /><path d="M5 12l14 0" /></svg></label>
</div>

    <ul class="space-y-4">        
        
        <?php 
        
        foreach($res as $k => $v) {
            if($v['estado'] == 0) {
                if(($v['id_user'] == $_SESSION['user_id'])) {
                    echo '
                    <li class="flex items-center justify-between space-x-4 pr-6 px-4">
                        <div class="flex items-center space-x-4 pr-4">
                            <img src="' . $arrConfig['url_site'] . '/uploads/' . $v['foto'] . '" alt="Amigo 1" class="w-12 h-12 rounded-full mr-4">
                            <div>
                                <h2 class="text-lg font-semibold">' . $v['username'] . '</h2>
                                <p class="text-gray-500">Convite pendente</p> 
                            </div>
                        </div>
                        <div>                            
                            <a href="amigos/trata_aceitar_convite.php?id='.$v['id_amigo'].'&tipo=remover" class="text-red-500 py-2 rounded inline-block"><svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-x"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M18 6l-12 12" /><path d="M6 6l12 12" /></svg></a>
                        </div>
                    </li>
                    ';
                } else if(($v['id_user2'] == $_SESSION['user_id'])) {            
                    echo '
                    <li class="flex items-center justify-between space-x-4 pr-6 px-4">
                        <div class="flex items-center space-x-4 pr-4">
                            <img src="' . $arrConfig['url_site'] . '/uploads/' . $res2[0]['foto'] . '" alt="Amigo 1" class="w-12 h-12 rounded-full mr-4"> 
                            <div>
                                <h2 class="text-lg font-semibold">' . $res2[0]['username'] . '</h2>
                                <p class="text-gray-500">Convite pendente.</p> 
                            </div>
                        </div>
                        <div>                            
                            <a href="amigos/trata_aceitar_convite.php?id='.$v['id_amigo'].'&tipo=aceitar" class=" text-green-500 py-2 rounded inline-block mr-4"><svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-check"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 12l5 5l10 -10" /></svg></a>    
                            <a href="amigos/trata_aceitar_convite.php?id='.$v['id_amigo'].'&tipo=remover" class="text-red-500 py-2 rounded inline-block"><svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-x"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M18 6l-12 12" /><path d="M6 6l12 12" /></svg></a>
                        </div>
                    </li>

                    ';                    
                }
                // tratar de pedidos de amizade
            } else {  
                if(($v['id_user2'] == $_SESSION['user_id'])) {    
                    $totalpostsnivel1 = my_query("SELECT COUNT(*) AS total1 FROM posts WHERE niveltarefa = 1 AND iduser=".$res2[0]['id']);
                    $totalpostsnivel2 = my_query("SELECT COUNT(*) AS total2 FROM posts WHERE niveltarefa = 2 AND iduser=".$res2[0]['id']);
                    $totalpostsnivel3 = my_query("SELECT COUNT(*) AS total3 FROM posts WHERE niveltarefa = 3 AND iduser=".$res2[0]['id']);
                    $pontos = intval($totalpostsnivel1[0]['total1'])+ (intval($totalpostsnivel2[0]['total2'])*2) + (intval($totalpostsnivel3[0]['total3'])*3);
                    echo '
                    <li class="flex items-center justify-between space-x-4 pr-6 px-4">
                        <div class="flex items-center space-x-4 pr-4">
                            <img src="' . $arrConfig['url_site'] . '/uploads/' . $res2[0]['foto'] . '" alt="Amigo 1" class="w-12 h-12 rounded-full mr-4"> 
                            <div>
                                <h2 class="text-lg font-semibold">' . $res2[0]['username'] . '</h2>
                                <p class="text-gray-500">'.$pontos.' pontos</p> 
                            </div>
                        </div>
                        <div>                                                        
                            <a href="amigos/trata_aceitar_convite.php?id='.$v['id_amigo'].'&tipo=remover" class="text-red-500 py-2 rounded inline-block"><svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-x"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M18 6l-12 12" /><path d="M6 6l12 12" /></svg></a>
                        </div>
                    </li>

                    ';                 
                    
                } else {
                    $totalpostsnivel1 = my_query("SELECT COUNT(*) AS total1 FROM posts WHERE niveltarefa = 1 AND iduser=".$v['id_user2']);
                    $totalpostsnivel2 = my_query("SELECT COUNT(*) AS total2 FROM posts WHERE niveltarefa = 2 AND iduser=".$v['id_user2']);
                    $totalpostsnivel3 = my_query("SELECT COUNT(*) AS total3 FROM posts WHERE niveltarefa = 3 AND iduser=".$v['id_user2']);
                    $pontos = intval($totalpostsnivel1[0]['total1'])+ (intval($totalpostsnivel2[0]['total2'])*2) + (intval($totalpostsnivel3[0]['total3'])*3);
                    echo '
                    <li class="flex items-center justify-between space-x-4 pr-6 px-4">
                        <div class="flex items-center space-x-4 pr-4">
                            <img src="' . $arrConfig['url_site'] . '/uploads/' . $v['foto'] . '" alt="Amigo 1" class="w-12 h-12 rounded-full mr-4"> 
                            <div>
                                <h2 class="text-lg font-semibold">' . $v['username'] . '</h2>
                                <p class="text-gray-500">'.$pontos.' pontos</p> 
                            </div>
                        </div>
                        <div>                            
                            <a href="amigos/trata_aceitar_convite.php?id='.$v['id_amigo'].'&tipo=remover" class="text-red-500 py-2 rounded inline-block"><svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-x"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M18 6l-12 12" /><path d="M6 6l12 12" /></svg></a>
                        </div>
                    </li>
                    ';
                }      
            }
        }        
        ?>        
    </ul>
<input type="checkbox" id="friendsModal" class="modal-toggle" />
<div class="modal" role="dialog">
  <div class="modal-box">
  <h3 class="font-bold text-lg">Adicionar Amigo</h3>
    <div class="pt-8 flex justify-center">
        <form method="post" action="amigos/trata_envia_pedido.php">            
            <input type="text" id="email" name="username" class="border rounded px-2 py-1 mb-4" placeholder="Username">            
            <div class="flex justify-center space-x-4">
                <button type="submit" class="bg-primary text-white px-4 py-2 rounded">Enviar</button>
                <label for="friendsModal" class="btn rounded bg-gray-100 text-black">Fechar</label>
            </div>
        </form>        
    </div>
  </div>
</div>
<?php include 'components/footer.php'; ?>