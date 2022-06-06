<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
    <title>Usuarios</title>
</head>
<body  >
<?php
require_once ('views/header.php');
// echo '<pre>';
// print_r($this->productos);
?>
<body style = "background-image: url(<?=URL?>/public/img/fondoV2.png)">

<div class="container">
<div class="table-container">
<table id="datatable" class="display table-items">
<a href="<?=URL?>usuario/agregar" class="btn-agregar">Agregar Usuarios</a>   
  <thead>
    <tr>
      <th  scope="col" >ID</th>
      <th  scope="col">Nivel</th>
      <th  scope="col">Nombre Usuario</th>
      <th scope="col">Contraseña</th>
      <th scope="col">Opciones</th>
    </tr>
  </thead>
  <tbody>
    <?php
  
    $usuarios = $this -> usuarios;
    for ($i=0; $i < count($usuarios); $i++) { 
      $urlModificar = URL.'usuario/modificar?id_usuario='.$usuarios[$i]['id_usuario'];
      $urlEliminar = URL.'usuario/eliminar?id_usuario='.$usuarios[$i]['id_usuario'];

     
      echo '<tr> 
     <td>'.$usuarios[$i]['id_usuario'].'</td>
     <td>'.$usuarios[$i]['nivel'].'</td>
     <td>'.$usuarios[$i]['nombre_usuario'].'</td>
     <td>'.$usuarios[$i]['password'].'</td>
     <td>
     <div >
     <a  class = "btn-eliminar" href="'.$urlEliminar.'" type="button"  id="btnEliminar">Eliminar</a>
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
<?php
require_once ('views/footer.php');?>

<script src = "<?=URL?>public/js/usuarios.js"></script>
<script>
  $(document).ready( function () {
    $('#datatable').DataTable();
  } 
);
</script>
  
</body>
</html>





