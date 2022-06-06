<!DOCTYPE html>
<html lang="en">
<head>
    <!-- //todo este codgo esta en el header -->
</head>
<body style = "background-image: url(<?=URL?>/public/img/fondoV2.png)">
<?php
require_once ('views/header.php')
?>

<!-- <img src="<?=URL?>public/img/fondoV2.png" class=" img-fluid"> -->
<div class="container">

<div class="table-container">
<table id="datatable" class = "display table-items">
<a class = "btn-agregar" href="<?=URL?>producto/agregar">Agregar Producto</a>   
  <thead>
    <tr>
     
      <th scope="col">ID</th>
      <th scope="col">Nombre</th>
      <th scope="col">Proveedor</th>
      <th scope="col">tipo</th>
      <th scope="col">precio</th>
      <th scope="col">Fecha Ingreso</th>
      <th scope="col">Fecha Caducida</th>
      <th scope="col">Opciones  </th>
    </tr>
  </thead>
  <tbody>
    <?php

    $productos = $this -> productos;
    for ($i=0; $i < count($productos); $i++) { 
      $urlModificar = URL.'producto/modificar?id_producto='.$productos[$i]['id_producto'];
      $urlEliminar = URL.'producto/eliminar?id_producto='.$productos[$i]['id_producto'];
     
      echo '<tr> 
     <td>'.$productos[$i]['id_producto'].'</td>
     <td>'.$productos[$i]['nombre'].'</td>
     <td>'.$productos[$i]['proveedor'].'</td>
     <td>'.$productos[$i]['tipo'].'</td>
     <td>'.$productos[$i]['precio'].'</td>
     <td>'.$productos[$i]['fecha_entrada'].'</td>
     <td>'.$productos[$i]['fecha_expiracion'].'</td>
     <td>
     <div >
     <a class = "btn-eliminar" href="'.$urlEliminar.'" type="button"  id="btnEliminar">Eliminar</a>
    <a class = "btn-editar" href="'.$urlModificar.'" type="button" >Modificar</a>
    </div>
    </td>   
</tr>';
   
    }
    ?>
 
    </tbody>

</table>
</div>
</div>
</div>
<?php
require_once ('views/footer.php');?>

<script src = "<?=URL?>public/js/productos.js"></script>
<script>
  $(document).ready( function () {
    $('#datatable').DataTable();
  } 
);
</script>
  
</body>
</html>


