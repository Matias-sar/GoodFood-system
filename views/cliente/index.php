<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>GF</title>
</head>
<body  >
<?php
require_once ('views/header.php');
// echo '<pre>';
// print_r($this->productos);
?>

<!-- <img src="<?=URL?>public/img/fondoV2.png" class=" img-fluid"> -->
<div class="table-container">
<table id="datatable" class="display table-items"  >
<a href="<?=URL?>cliente/agregar" class="btn-agregar">Agregar Cliente</a>   
  <thead>
    <tr>
     
      <th >ID</th>
      <th >Nombre</th>
      <th >Apellido</th>
      <th >Informacion</th>
      <th >Opciones</th>
    </tr>
  </thead>
  <tbody>
  <?php
                 $clientes = $this -> clientes;
                 for ($i=0; $i < count($clientes); $i++) { 
                   $urlModificar = URL.'cliente/modificar?id_cliente='.$clientes[$i]['id_cliente'];
                   //boton eliminar funcional 
                   $urlEliminar = URL.'cliente/eliminar?id_cliente='.$clientes[$i]['id_cliente'];

                echo '<tr> 
     <td>'.$clientes[$i]['id_cliente'].'</td>
     <td>'.$clientes[$i]['nombre'].'</td>
     <td>'.$clientes[$i]['apellido'].'</td>
     <td>'.$clientes[$i]['informacion_contacto'].'</td>
     <td>
    
     <a class = "btn-eliminar" href="'.$urlEliminar.'" id="btnEliminar">Eliminar</a>
    <a class = "btn-editar" href="'.$urlModificar.'">Modificar</a>
  

  
    </td>   
</tr>';
                 }
?> 
 
    </tbody>

</table>
</div>
<?php
require_once ('views/footer.php');?>

<script src = "<?=URL?>public/js/clientes.js"></script>

<script>
  $(document).ready( function () {
    $('#datatable').DataTable();
  } 
);

</script>
</body>
</html>
