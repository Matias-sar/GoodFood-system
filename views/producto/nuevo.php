<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GF</title>
   

    
    
</head>
<body  style = "background-image: url(<?=URL?>/public/img/fondoV2.png)">
<?php
require_once ('views/header.php');
// echo '<pre>';
//se consulta el orden de los items mediante un array
// print_r($this->productos);
?>
<!-- component -->

		<!-- Container -->
		<div class="container mx-auto">
			<div class="flex justify-center px-6 my-12">
				<!-- Row -->
				<div class="w-full xl:w-3/4 lg:w-11/12 flex">

					<div class="w-full lg:w-12/12 bg-white p-5 rounded-lg lg:rounded-l-none">
						<h3 class="pt-4 text-2xl text-center">Agregar nuevo producto</h3>
						<form action ="<?=URL?>producto/agregar" method="POST" class="px-8 pt-6 pb-8 mb-4 bg-white rounded" id="frmProducto">
							<div class="mb-4 md:flex md:justify-between">

                <div class="mb-4 md:mr-2 md:mb-0">
									<label class="block mb-2 text-sm font-bold text-gray-700" for="firstName">
										Nombre
									</label>
									<input class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border 
                  rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="firstName"
									name="txtNombre" type="text" placeholder="Nombre" data-validetta="required">
								</div>

                <div class="mb-4 md:mr-2 md:mb-0">
									<label class="block mb-2 text-sm font-bold text-gray-700" for="firstName">
										Proveedor
									</label>
									<input class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border 
                  rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="firstName"
									name="txtProveedor"	type="text" placeholder="proveedor" data-validetta="required">
								</div>

                <div class="mb-4 md:mr-2 md:mb-0">
									<label class="block mb-2 text-sm font-bold text-gray-700" for="firstName">
										Tipo Producto
									</label>
									<input class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border 
                  rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="firstName"
									name="txtTipo" type="text" placeholder="Tipo Producto" data-validetta="required">
								</div>

                <div class="mb-4 md:mr-2 md:mb-0">
									<label class="block mb-2 text-sm font-bold text-gray-700" for="firstName">
										Precio
									</label>
									<input class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border 
                  rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="firstName"
									name="txtPrecio" type="number" placeholder="$" data-validetta="required">
							</div>
                </div>

							<div class="mb-4 md:flex md:justify-between">
								<div class="md:ml-2">
									<label class="block mb-2 text-sm font-bold text-gray-700" >
										Fecha de entrada
									</label>
									<input class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border 
                  rounded shadow appearance-none focus:outline-none focus:shadow-outline"
									name = "txtEntrada"  type="datetime-local" required  data-validetta="required">
								</div>

                <div class="md:ml-2">
									<label class="block mb-2 text-sm font-bold text-gray-700" >
										Fecha de expiración
									</label>
									<input class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border 
                  rounded shadow appearance-none focus:outline-none focus:shadow-outline"
									id="" name="txtExpi" type="date" data-validetta="required">
									
								</div>
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
									type="button" href="<?=URL?>producto/index">
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
<script src = "<?=URL?>public/js/productos.js"></script>


  
</body>
</html>