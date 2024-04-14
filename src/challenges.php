<?php
include 'components/header.php';


$queryverificar = my_query('SELECT COUNT(*) AS total FROM posts WHERE iduser = '.$_SESSION['user_id']);
include $arrConfig['dir_site'] . '/tarefas/pushtarefa.php';

$c=0;
if ($queryverificar[0]['total']>2){
   $queryverificar2= my_query('SELECT * FROM posts WHERE iduser = '.$_SESSION['user_id']);
   for ($i=0; $i<$queryverificar[0]['total']; $i++){
       $data = $queryverificar2[$i]['data'];
       $data = substr($data, 0, 10);
       if ($data == date('Y-m-d')){
            $c++;
           
       }
   }

   if ($c >2){
    echo '<div role="alert" class="alert alert-error">
    <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
    <span>Erro! Você já atingiu o limite de publicações diárias.</span>
  </div>';
            include 'components/footer.php';
           die();
   }
}
?>

<?php 
if (isset($_GET['erro'])){
    if ($_GET['erro']==1){
        echo '<div role="alert" class="alert alert-error">
        <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
        <span>Não encontramos nenhum pássaro na imagem.</span>
      </div>';
    } 
   
}
?>

<div class="w-screen flex flex-col justify-center items-center">
    <h1 class="text-primary text-4xl font-black my-6">Objetivos do dia</h1>

    <?php

        $query = my_query("SELECT * FROM tarefas WHERE dataparaaparecer= '".date('Y-m-d')."'");
    ?>

    

    <div class="stats stats-vertical border border-primary">
        <div class="stat">
            <div class="stat-figure">
                <div class="avatar pl-10">
                    <div class="w-16 rounded-sm">
                        <a href="<?php echo $arrConfig['url_site'].'/uploads/tarefas/'. $query[0]['foto'] ?>" data-lightbox="image" data-title="<?php echo $query[0]['titulo'] ?>">
                            <img src="<?php echo $arrConfig['url_site'].'/uploads/tarefas/'. $query[0]['foto'] ?>" />
                        </a>
                    </div>
                </div>
            </div>
            <div class="stat-title">Objetivo #1 <div class="badge bg-zinc-400 text-black">Comum</div></div>
            <div class="stat-value text-primary font-semibold text-base"><?php echo $query[0]['titulo'] ?></div>
            <div class="stat-desc"><?php echo $query[0]['nomeespecie'] ?></div>
        </div>

        <div class="stat">
            <div class="stat-figure">
                <div class="avatar">
                    <div class="w-16 rounded-sm">
                        <a href="<?php echo $arrConfig['url_site'].'/uploads/tarefas/'. $query[1]['foto'] ?>" data-lightbox="image" data-title="<?php echo $query[1]['titulo'] ?>">
                            <img src="<?php echo $arrConfig['url_site'].'/uploads/tarefas/'. $query[1]['foto'] ?>" />
                        </a>
                    </div>
                </div>
            </div>
            <div class="stat-title">Objetivo #2 <div class="badge bg-emerald-400 text-black">Raro</div></div>
            <div class="stat-value text-primary font-semibold text-base"><?php echo $query[1]['titulo'] ?></div>
            <div class="stat-desc"><?php echo $query[1]['nomeespecie'] ?></div>
        </div>

        <div class="stat">
            <div class="stat-figure">
                <div class="avatar">
                    <div class="w-16 rounded-sm">
                        <a href="<?php echo $arrConfig['url_site'].'/uploads/tarefas/'. $query[2]['foto'] ?>" data-lightbox="image" data-title="<?php echo $query[2]['titulo'] ?>">
                            <img src="<?php echo $arrConfig['url_site'].'/uploads/tarefas/'. $query[2]['foto'] ?>" />
                        </a>
                    </div>
                </div>
            </div>
            <div class="stat-title">Objetivo #3 <div class="badge bg-yellow-400 text-black">Lendário</div></div>
            <div class="stat-value text-primary font-semibold text-base"><?php echo $query[2]['titulo'] ?></div>
            <div class="stat-desc"><?php echo $query[2]['nomeespecie'] ?></div>
        </div>
    </div>
    <div class="mt-4">
        <form class="w-96 flex flex-col justify-center items-center [&>*]:mb-3 last:mb-0" action="posts/trata_post.php" method="post" enctype="multipart/form-data">
            <h1 class="font-bold mb-2">Enviar Fotografia</h1>
            <select required name="objetivo" class="select select-bordered w-full max-w-xs">
                <option disabled selected>Selecione um Objetivo</option>
                <option value="objetivo1">Objetivo #1 - <?php echo $query[0]['titulo'] ?></option>
                <option value="objetivo2">Objetivo #2 - <?php echo $query[1]['titulo'] ?></option>
                <option value="objetivo3">Objetivo #3 - <?php echo $query[2]['titulo'] ?></option>
            </select>

            <?php
                $reply = my_query("SELECT * FROM tarefas WHERE dataparaaparecer= '".date('Y-m-d')."'");
            ?>

            <input type="hidden" name="idobjetivo1" value="<?php echo $reply[0]['id'] ?>">
            <input type="hidden" name="idobjetivo2" value="<?php echo $reply[1]['id'] ?>">
            <input type="hidden" name="idobjetivo3" value="<?php echo $reply[2]['id'] ?>">
            <input type="hidden" id="Posicao" name="Posicao" value="indefinido">

            <textarea name="descricao" class="textarea textarea-bordered w-full max-w-xs" placeholder="Descrição"></textarea>

            <input type="file" class="file-input file-input-bordered w-full max-w-xs" name="foto" required>

            <button class="btn btn-circle">
                <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-upload"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 17v2a2 2 0 0 0 2 2h12a2 2 0 0 0 2 -2v-2" /><path d="M7 9l5 -5l5 5" /><path d="M12 4l0 12" /></svg>
            </button>
        </form>
    </div>
</div>


<?php include 'components/footer.php';




?>