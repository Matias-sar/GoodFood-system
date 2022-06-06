<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar</title>
   

     
    
</head>
<?php
require_once ('views/header.php');
// echo '<pre>';
//se consulta el orden de los items mediante un array
// print_r($this->productos);
?>




<!-- component -->

<!-- <div class="container">
        <div >
            <div >
                <h1 class="text-center">Agregar Cliente</h1>
                <form action="<?=URL?>cliente/agregar" method="POST" id="frmCliente" >
                    
                    
                   
                   Nombre
                   <input type="text" name="txtNombre" class="form-control">

                   Apellido
                   <input type="text" name="txtApellido" class="form-control">
                   

                    este campo puede ser correo electronico o numero -->
                    <!-- Informacion Contacto
                    <input type="text" name="txtInfo" class="form-control">
                    
                    <button  id="btnAgregar">Guardar</button>
                </form>
            </div>
        </div>
    </div>  -->



    
		<!-- Container -->
		<div class="container mx-auto">
			<div class="flex justify-center px-6 my-12">
				<!-- Row -->
				<div class="w-full xl:w-3/4 lg:w-11/12 flex">

					<div class="w-full lg:w-12/12 bg-white p-5 rounded-lg lg:rounded-l-none">
						<h3 class="pt-4 text-2xl text-center">Agregar Cliente</h3>
						<form action="<?=URL?>cliente/agregar" method="POST" class="px-8 pt-6 pb-8 mb-4 bg-white rounded" id="frmCliente">
							<div class="mb-4 md:flex md:justify-between">


                <div class="mb-4 md:mr-2 md:mb-0">
									<label class="block mb-2 text-sm font-bold text-gray-700" for="firstName">
									Nombre
									</label>
									<input class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border 
                  rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="firstName"
                  name="txtNombre"	type="text" placeholder="Nombre" data-validetta="required">
								</div>

                <div class="mb-4 md:mr-2 md:mb-0">
									<label class="block mb-2 text-sm font-bold text-gray-700" for="firstName">
								Apellido
									</label>
									<input class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border 
                  rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="firstName"
                  name="txtApellido" type="text" placeholder="Apellido" data-validetta="required">
								</div>

                <div class="mb-4 md:mr-2 md:mb-0">
									<label class="block mb-2 text-sm font-bold text-gray-700" for="firstName">
								Información Contacto
									</label>
									<input class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border 
                  rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="firstName"
                  name="txtInfo" type="text" placeholder="000-000" data-validetta="required">
								</div>

               

					

							<div class="mb-6 text-center">
								<button
									class="w-full px-4 py-2 font-bold text-white bg-blue-500 rounded-full hover:bg-blue-700 focus:outline-none focus:shadow-outline"
									type="button" id="btnAgregar">
									Agregar
								</button>
							</div>
							<div class="mb-6 text-center">
								<a
									class="w-full px-4 py-2 font-bold text-white bg-yellow-500 rounded-full hover:bg-red-700 focus:outline-none focus:shadow-outline"
									type="button" href="<?=URL?>cliente/index">
									Regresar
								</a>
							</div>

						</form>
					</div>
				</div>
			</div>
		</div>
	</body>
   

 
<?php
require_once ('views/footer.php');?>
<script src = "<?=URL?>public/js/clientes.js"></script>


  
</body>
</html>


