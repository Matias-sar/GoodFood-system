<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GoodFood</title>
    <!--DataTables css-->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.0/css/jquery.dataTables.css">
    <!--Swiper.js-->
    <link rel="stylesheet"href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>
    <!--Tailwind css-->
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="<?=URL?>/public/css/style.css">
    <!--Google font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@700&family=Joti+One&display=swap" rel="stylesheet">
</head>
<body class="bg-cover bg-center " style = "background-image: url(<?=URL?>/public/img/fondoV2.png)">
<div class = "container">
<header class = "bg-white p-2 flex flex-col w-full">
        <div class = "flex inline-flex">
            <h1 class = "text-color-logo font-bold">GF</h1>
            <h1 class = "px-5 py-2 font-bold text-color-menu">Bienvenido <?php echo "Usuario";?></h1>
            <button class = "ml-auto bg-orange-300 font-bold text-orange-500 hover:bg-orange-200 p-2 rounded-md nav-toggler" data-target="#menu-responsive">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
        </div>
        <div class = "py-1 flex flex-col" style = "display: none" id = "menu-responsive">
            <ul class = "py-1 flex flex-col">
                <li class = "py-4">
                    <a href = "" class = "px-7 py-4 font-bold text-zinc-500 hover:text-zinc-400 focus:text-zinc-400">Inicio</a>
                </li>
                <li class = "py-4">
                    <a href = "" class = "px-7 py-4 font-bold text-zinc-500 hover:text-zinc-400 focus:text-zinc-400">Usuario</a>
                </li>
                <li class = "py-4">
                    <a href = "#" class = "px-7 py-4 font-bold text-zinc-500 hover:text-zinc-400 focus:text-zinc-400">Clientes</a>
                </li>
                <li class = "py-4">
                    <a href = "#" class = "px-7 py-4 font-bold text-zinc-500 hover:text-zinc-400 focus:text-zinc-400">Productos</a>
                </li>
                <li class = "py-4">
                    <a href = "#" class = "px-7 py-4 font-bold text-zinc-500 hover:text-zinc-400 focus:text-zinc-400">Productos en existencias</a>
                </li>
                <li class = "py-4">
                    <a href = "#" class = "px-7 py-4 font-bold text-zinc-500 hover:text-zinc-400 focus:text-zinc-400">Reportes</a>
                </li>
                <li class = "py-4 pl-6">
                    <button class = "bg-orange-300 p-2 px-4 rounded-full font-bold text-orange-500 hover:bg-orange-200">Cerrar session</button>
                </li>
            </ul>
        </div>
    </header>
    <div class = "text-white">
        Inicio
    </div>
</div>
<?php require_once ('views/footer.php');?>