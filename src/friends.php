<?php include 'components/header.php'; ?>
<div class="w-screen h-[60px] flex justify-between items-center px-3 bg-transparent sticky top-0 z-1">
    <h1 class="text-2xl font-bold text-primary">Amigos</h1>
    <label for="friendsModal" class="btn btn-circle bg-primary text-white"><svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-plus"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 5l0 14" /><path d="M5 12l14 0" /></svg></label>
</div>

    <ul class="space-y-4">
        <li class="flex items-center justify-between space-x-4 pr-6 px-4">
            <div class="flex items-center space-x-4 pr-4">
                <img src="<?php echo $arrConfig['url_site']; ?>/uploads/default.png" alt="Amigo 1" class="w-12 h-12 rounded-full mr-4">
                <div>
                    <h2 class="text-lg font-semibold">Amigo 1</h2>
                    <p class="text-gray-500">Descrição do amigo 1.</p>
                </div>
            </div>
            <div>
                <a href="#" class=" text-green-500 py-2 rounded inline-block mr-4"><svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-check"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 12l5 5l10 -10" /></svg></a>
                <a href="#" class="text-red-500 py-2 rounded inline-block"><svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-x"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M18 6l-12 12" /><path d="M6 6l12 12" /></svg></a>
            </div>
        </li>
        <li class="flex items-center justify-between space-x-4 pr-6 px-4">
            <div class="flex items-center space-x-4 pr-4">
                <img src="<?php echo $arrConfig['url_site']; ?>/uploads/default.png" alt="Amigo 2" class="w-12 h-12 rounded-full mr-4">
                <div>
                    <h2 class="text-lg font-semibold">Amigo 2</h2>
                    <p class="text-gray-500">Descrição do amigo 2.</p>
                </div>
            </div>
            <div class="mr-4">
                <a href="#" class=" text-green-500 py-2 rounded inline-block mr-4"><svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-check"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 12l5 5l10 -10" /></svg></a>
                <a href="#" class=" text-red-500 py-2 rounded inline-block"><svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-x"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M18 6l-12 12" /><path d="M6 6l12 12" /></svg></a>
            </div>
        </li>
        <li class="flex items-center justify-between space-x-4 pr-6 px-4">
            <div class="flex items-center space-x-4 pr-4">
                <img src="<?php echo $arrConfig['url_site']; ?>/uploads/default.png" alt="Amigo 3" class="w-12 h-12 rounded-full mr-4">
                <div>
                    <h2 class="text-lg font-semibold">Amigo 3</h2>
                    <p class="text-gray-500">Descrição do amigo 3.</p>
                </div>
            </div>
            <div>
                <a href="#" class="text-green-500 py-2 rounded inline-block mr-4"><svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-check"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 12l5 5l10 -10" /></svg></a>
                <a href="#" class="text-red-500 py-2 rounded inline-block"><svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-x"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M18 6l-12 12" /><path d="M6 6l12 12" /></svg></a>
            </div>
        </li>
    </ul>
<input type="checkbox" id="friendsModal" class="modal-toggle" />
<div class="modal" role="dialog">
  <div class="modal-box">
  <h3 class="font-bold text-lg">Adicionar Amigo</h3>
    <div class="pt-8 flex justify-center">
        <form>
            <input type="email" id="email" name="email" class="border rounded px-2 py-1 mb-4" placeholder="Email ou Username">
            <div class="flex justify-center space-x-4">
                <button type="submit" class="bg-primary text-white px-4 py-2 rounded">Enviar</button>
                <label for="friendsModal" class="btn rounded bg-gray-100 text-black">Fechar</label>
            </div>
        </form>
    </div>
  </div>
</div>
<?php include 'components/footer.php'; ?>