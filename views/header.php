<header class = "bg-white p-2 flex flex-col w-full">
        <div class = "flex inline-flex">
            <h1 class = "text-color-logo font-bold">GF</h1>
            <h1 class = "px-5 py-2 font-bold text-color-menu">Bienvenid@ <?=$_SESSION['usuario']?></h1>
            <button class = "ml-auto bg-orange-300 font-bold text-orange-500 hover:bg-orange-200 p-2 rounded-md nav-toggler" data-target="#menu-responsive">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
        </div>
        <div class = "py-1 flex flex-col" style = "display: none" id = "menu-responsive">
            <ul class = "py-1 flex flex-col">
                <li class = "py-4">
                    <a href = "<?=URL?>inicio/home" class = "px-7 py-4 font-bold text-zinc-500 hover:text-zinc-400 focus:text-zinc-400">Inicio</a>
                </li>
                <?php
                if($_SESSION['nivel'] == 1){                
                ?>
                <li class = "py-4">
                    <a href = "" class = "px-7 py-4 font-bold text-zinc-500 hover:text-zinc-400 focus:text-zinc-400">Usuario</a>
                </li>
                <?php
                }
                ?>
                <?php
                if($_SESSION['nivel'] == 2 || $_SESSION['nivel'] == 1){                
                ?>
                <li class = "py-4">
                    <a href = "#" class = "px-7 py-4 font-bold text-zinc-500 hover:text-zinc-400 focus:text-zinc-400">Clientes</a>
                </li>
                <?php
                }
                ?>
                <li class = "py-4">
                    <a href = "#" class = "px-7 py-4 font-bold text-zinc-500 hover:text-zinc-400 focus:text-zinc-400">Productos</a>
                </li>
                <li class = "py-4">
                    <a href = "#" class = "px-7 py-4 font-bold text-zinc-500 hover:text-zinc-400 focus:text-zinc-400">Productos en existencias</a>
                </li>
                <?php
                if($_SESSION['nivel'] == 1){                
                ?>
                <li class = "py-4">
                    <a href = "#" class = "px-7 py-4 font-bold text-zinc-500 hover:text-zinc-400 focus:text-zinc-400">Reportes</a>
                </li>
                <?php
                }
                ?>
                <li class = "py-4 pl-6">
                    <button class = "bg-orange-300 p-2 px-4 rounded-full font-bold text-orange-500 hover:bg-orange-200">
                        <a href="<?=URL?>inicio/logout">Cerrar session</a>
                    </button>
                </li>
            </ul>
        </div>
    </header>