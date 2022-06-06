<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar</title>
   
    <body style = "background-image: url(<?=URL?>/public/img/fondoV2.png)">

     
    
</head>
<?php
require_once ('views/header.php');
// echo '<pre>';
//se consulta el orden de los items mediante un array
// print_r($this->productos);
?>




<!-- component -->
<div class="container place-content-center">
        <div>
            <div class = "mt-10">
              <?php   $usuarios = $this->datos;
     //muestra un rreglo de los datos
    //  print_r($usuarios);?> 
                <!-- <form action="<?=URL?>usuario/modificar" method="POST" id="frmUsuario">	

 <-- Container
  <div class="container mx-auto">
			<div class="flex justify-center px-6 my-12">
				 Row -->
				<div class="w-full xl:w-3/4 lg:w-11/12 flex" style="margin-left: auto; margin-right: auto;">

					<div class="w-full lg:w-12/12 bg-white p-5 rounded-lg lg:rounded-l-none">
						<h3 class="pt-4 text-2xl text-center">Modificar Usuario</h3>
						<form action="<?=URL?>usuario/modificar" method="POST" class="px-8 pt-6 pb-8 mb-4 bg-white rounded" id="frmUsuario">
							<div class="mb-4 md:flex md:justify-between">


                <div class="mb-4 md:mr-2 md:mb-0">
									<label class="block mb-2 text-sm font-bold text-gray-700" for="firstName">
							    ID
									</label>
									<input class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border 
                  rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="firstName"
                  name="txtId"  type="text" placeholder="First Name" data-validetta="required" value="<?=$usuarios[0]?>" readonly>
								</div>

                <div class="mb-4 md:mr-2 md:mb-0">
									<label class="block mb-2 text-sm font-bold text-gray-700" for="firstName">
							    Nivel
									</label>
									<input class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border 
                  rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="firstName"
                  name="txtNivel"type="text" placeholder="First Name" data-validetta="required" value="<?=$usuarios[1]?>">
								</div>

                <div class="mb-4 md:mr-2 md:mb-0">
									<label class="block mb-2 text-sm font-bold text-gray-700" for="firstName">
								Nombre Usuario
									</label>
									<input class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border 
                  rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="firstName"
                  name="txtUsuario" type="text" placeholder="First Name" data-validetta="required" value="<?=$usuarios[2]?>">
								</div>

                <div class="mb-4 md:mr-2 md:mb-0">
									<label class="block mb-2 text-sm font-bold text-gray-700" for="firstName">
							Contraseña
									</label>
									<input class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border 
                  rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="firstName"
                  name="txtPass" type="text" placeholder="First Name" data-validetta="required"value="<?=$usuarios[3]?>">
								</div>
							<div class="mb-6 text-center">
								<button
									class="w-full px-4 py-2 font-bold text-white bg-blue-500 rounded-full hover:bg-blue-700 focus:outline-none focus:shadow-outline"
									type="button" id="btnModificar">
								Modificar
								</button>
							</div>

						</form>
					</div>
				</div>
			</div>
		</div>
	</body>
<?php
require_once ('views/footer.php');?>
<script src = "<?=URL?>public/js/usuarios.js"></script>
</body>
</html>