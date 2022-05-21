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
<?php require_once ('views/header.php');?>
    <div class = "text-white">
        Inicio
    </div>
</div>
<?php require_once ('views/footer.php');?>