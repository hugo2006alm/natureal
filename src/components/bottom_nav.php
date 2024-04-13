<?php
// echo basename($_SERVER['PHP_SELF']);
// echo "_";
// echo (basename($_SERVER['PHP_SELF']) == "index.php" || basename($_SERVER['PHP_SELF']) == "");
// echo "_";
// echo (basename($_SERVER['PHP_SELF']) == "");
// echo "_";
// echo (basename($_SERVER['PHP_SELF']) == "index.php");
// die();
?>
<div class="z-10 fixed bottom-20 w-screen flex justify-center items-center">
    <div class="flex gap-5 bg-base-100 rounded-md p-4">
        <div>
            <span class="countdown font-mono text-3xl">
                <span id="hourspan"></span>
            </span>
            hours
        </div>
        <div>
            <span class="countdown font-mono text-3xl">
                <span id="minspan"></span>
            </span>
            min
        </div>
        <div>
            <span class="countdown font-mono text-3xl">
                <span id="secspan"></span>
            </span>
            sec
        </div>
    </div>
</div>
<div class="btm-nav bg-base-100 text-primary">
    <a href="index.php" <?php echo (basename($_SERVER['PHP_SELF']) == "index.php" || basename($_SERVER['PHP_SELF']) == "") ? 'class="active"' : ""; ?>>
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-home">
            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
            <path d="M5 12l-2 0l9 -9l9 9l-2 0" />
            <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" />
            <path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" />
        </svg>
    </a>
    <a href="challenges.php" <?php echo (basename($_SERVER['PHP_SELF']) == "challenges.php") ? 'class="active"' : ""; ?>>
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-medal-2">
            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
            <path d="M9 3h6l3 7l-6 2l-6 -2z" />
            <path d="M12 12l-3 -9" />
            <path d="M15 11l-3 -8" />
            <path d="M12 19.5l-3 1.5l.5 -3.5l-2 -2l3 -.5l1.5 -3l1.5 3l3 .5l-2 2l.5 3.5z" />
        </svg>
    </a>
    <a href="account.php" <?php echo (basename($_SERVER['PHP_SELF']) == "account.php" || basename($_SERVER['PHP_SELF']) == "") ? 'class="active"' : ""; ?>>
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-user">
            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
            <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />
            <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
        </svg>
    </a>
</div>