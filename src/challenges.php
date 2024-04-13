<?php
include 'components/header.php';

$_SESSION['user_name'] = 'kodin';
$_SESSION['user_id'] = '1';

if (!isset($_SESSION['user_name'])) {
    header('Location: ' . $arrConfig['dir_site'] . '/auth/login.php');
    die();
}

include $arrConfig['dir_site'] . '/tarefas/pushtarefa.php';

?>


<div class="w-screen flex flex-col justify-center items-center">
    <h1 class="text-primary text-4xl font-bold mt-6">Objetivos do dia</h1><br>

    <div class="stats stats-vertical shadow">
        <div class="stat">
            <div class="stat-figure text-primary">
                <div class="avatar">
                    <div class="w-16 rounded-sm">
                        <img src="https://daisyui.com/images/stock/photo-1534528741775-53994a69daeb.jpg" />
                    </div>
                </div>
            </div>
            <div class="stat-title">Capture #1 <div class="badge bg-yellow-400">Legendary</div></div>
            <div class="stat-value text-primary">26.3K</div>
            <div class="stat-desc">Fulvous Whistling-Duck (Dendrocygna bicolor)</div>
        </div>

        <div class="stat">
            <div class="stat-figure text-secondary">
                <div class="avatar">
                    <div class="w-16 rounded-sm">
                        <img src="https://daisyui.com/images/stock/photo-1534528741775-53994a69daeb.jpg" />
                    </div>
                </div>
            </div>
            <div class="stat-title">Capture #2</div>
            <div class="stat-value text-primary">26.3K</div>
            <div class="stat-desc">Fulvous Whistling-Duck (Dendrocygna bicolor)</div>
        </div>

        <div class="stat">
            <div class="stat-figure text-secondary">
                <div class="avatar">
                    <div class="w-16 rounded-sm">
                        <img src="https://daisyui.com/images/stock/photo-1534528741775-53994a69daeb.jpg" />
                    </div>
                </div>
            </div>
            <div class="stat-title">Capture #3</div>
            <div class="stat-value text-primary">84.2</div>
            <div class="stat-desc">Greater White-fronted Goose (Anser albifrons)</div>
        </div>
    </div>
    <div class="mt-4">
        <form class="w-96 flex flex-col justify-center items-center [&>*]:mb-3 last:mb-0" action="./posts/trata_post.php" method="post" enctype="multipart/form-data">
            <h1 class="font-bold mb-2">Submit Challenge</h1>
            <select class="select select-bordered w-full max-w-xs">
                <option disabled selected>Select a Challenge</option>
                <option>Capture #1 - </option>
                <option>Capture #2 - </option>
                <option>Capture #3 - </option>
            </select>

            <input type="hidden" name="idobjetivo1" value="<?php echo $reply[0]['id'] ?>">
            <input type="hidden" name="idobjetivo2" value="<?php echo $reply[1]['id'] ?>">
            <input type="hidden" name="idobjetivo3" value="<?php echo $reply[2]['id'] ?>">
            <input type="hidden" id="Posicao" name="Posicao" value="indefinido">

            <textarea class="textarea textarea-bordered w-full max-w-xs" placeholder="Description"></textarea>

            <input type="file" class="file-input file-input-bordered w-full max-w-xs" name="foto" required><br><br>

            <button class="btn btn-circle">
                <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-upload"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 17v2a2 2 0 0 0 2 2h12a2 2 0 0 0 2 -2v-2" /><path d="M7 9l5 -5l5 5" /><path d="M12 4l0 12" /></svg>
            </button>
        </form>
    </div>
</div>


<?php include 'components/footer.php'; ?>