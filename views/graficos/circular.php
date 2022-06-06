<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>grafico</title>  
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" 
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src = "<?=URL?>/public/js/menu.js"></script>
        <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="<?=URL?>/public/css/table.css">
    <link rel="stylesheet" href="<?=URL?>/public/css/style.css">
    <script src="<?=URL?>public/chartphp/js/chartphp.js"></script>
    <link rel="stylesheet" href="<?=URL?>public/chartphp/js/chartphp.css">  
</head>
<body style="background: #99A3A4;">
    
 <?php require_once ('views/header.php');?> 
    <?=$this->grafica?>
   <!-- jQuery -->
</body>
</html>


