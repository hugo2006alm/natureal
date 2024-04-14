<div class="w-screen h-[60px] flex justify-between items-center px-3 bg-base-100 sticky top-0 z-10">
    <div class="btn btn-ghost text-primary pl-0">
    <a href="friends.php">
        <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-users"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M9 7m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" /><path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" /><path d="M16 3.13a4 4 0 0 1 0 7.75" /><path d="M21 21v-2a4 4 0 0 0 -3 -3.85" /></svg>
    </a>
    </div>

    <div class="relative w-52 h-full">
        <a href="index.php" class="text-primary text-lg font-bold transition-opacity duration-300 absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2" id="title">NatuReal</a>
        <span class="countdown font-mono text-2xl text-primary opacity-0 transition-opacity duration-300 absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2" id="countdown-top">
            <span id="hourspan"></span>h
            <span id="minspan"></span>m
            <span id="secspan"></span>s
        </span>
    </div>

    <div class="dropdown dropdown-end">
        <div tabindex="0" role="button" class="btn btn-ghost text-primary pr-0"><svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-dots-vertical"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" /><path d="M12 19m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" /><path d="M12 5m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" /></svg></div>
        <ul tabindex="0" class="dropdown-content z-[1] menu p-2 shadow bg-base-100 text-primary rounded-box w-52">
            <li >
                <div class="flex justify-between" onclick="document.getElementById('theme').checked ? document.getElementById('theme').checked = false : document.getElementById('theme').checked = true">
                    <span class="inline">
                        <?php
                        // echo $_SESSION['theme'];
                        ?>
                        Tema
                    </span>
                    <input id="theme" type="checkbox" value="forest" class="checkbox theme-controller"/>
                </div>
            </li>
            <li><a href="<?php echo $arrConfig['url_site'].'/settings.php' ?>">Definições</a></li>
        </ul>
    </div>
</div>