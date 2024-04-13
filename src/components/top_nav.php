<div class="w-screen h-[60px] shadow-md flex justify-between items-center px-3">
    <a href="index.php" class="text-primary text-lg font-bold btn btn-ghost">NatuReal</a>

    <div class="dropdown dropdown-end">
        <div tabindex="0" role="button" class="btn btn-ghost text-primary"><svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-dots-vertical"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" /><path d="M12 19m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" /><path d="M12 5m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" /></svg></div>
        <ul tabindex="0" class="dropdown-content z-[1] menu p-2 shadow bg-base-100 text-primary rounded-box w-52">
            <li><a>Item 1</a></li>
            <li >
                <div class="flex justify-between" onclick="document.getElementById('theme').checked ? document.getElementById('theme').checked = false : document.getElementById('theme').checked = true">
                    <span class="inline">
                        <?php
                        // echo $_SESSION['theme'];
                        ?>
                        Theme
                    </span>
                    <input id="theme" type="checkbox" value="dark" class="checkbox theme-controller"/>
                </div>
            </li>
        </ul>
    </div>
</div>