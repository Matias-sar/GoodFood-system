<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GoodFood_login</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="<?=URL?>/public/css/style.css">
    <!--Google font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@700&family=Joti+One&display=swap" rel="stylesheet">
</head>
<body class="bg-cover bg-center " style = "background-image: url(<?=URL?>/public/img/fondoV2.png)">
    <div class="container">
        <div class="text-center py-12">
            <form action="<?=URL?>inicio/login" method="POST" class = "flex flex-col mt-3 shadow-2xl rounded-lg bg-white" style = "padding: 1em; width: 350px; height:450px; margin-left: auto; margin-right: auto;" id = "form_login">
                <h1 class = "py-5 text-color-logo text-orange-500 font-bold" style = "font-family: 'Joti One', cursive; font-size: 45px;">GoodFood</h1>
                <div class = "py-6">
                    <input type="text" placeholder = "Usuario" name = "username" class = "rounded-lg p-3 text-center px-9 border-2 border-zinc-300 focus:outline-none focus:border-zinc-400" id = "input_form">
                </div>
                <div class = "py-3">
                    <input type="password" placeholder = "Contraseña" name = "password" class = "rounded-lg p-3 text-center px-9 border-2 border-zinc-300 focus:outline-none focus:border-zinc-400" id = "input_form">
                </div>
                <p class = "py-1 text-red-500" id = "txt_error">*Campos vacíos</p>
                <p class = "py-1 text-red-500 " id = "txt_error"></p>
                <div class = "py-8">
                    <button class = "bg-orange-400 text-white p-3 rounded-full px-9 font-bold hover:bg-orange-300" style = "font-family: 'Inter', sans-serif;">
                        Iniciar sesión
                    </button>
                </div>
            </form>
        </div>
</div>
<script src = "<?=URL?>/public/js/validacion_login.js"></script>
</body>