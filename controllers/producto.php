<?php
// Controlador Tabla Producto
   class Producto extends Controller{
    public function __construct(){
        parent::__construct();
    }

    public function index(){
       $this ->getView()->productos = $this -> getModel()->listadoProductos();
        $pagina='producto/index';
        $this ->getView()->loadView($pagina);
    }


public function agregar(){
    if(!empty($_POST)){
        //todo desde la parte verdadera
        $this ->getModel()->setNombre($_POST['txtNombre']);
        $this ->getModel()->setProveedor($_POST['txtProveedor']);
        $this ->getModel()->setTipo($_POST['txtTipo']);
        $this ->getModel()->setPrecio($_POST['txtPrecio']);
        $this ->getModel()->setFechaEntrada($_POST['txtEntrada']);
        $this ->getModel()->setFechaExpiracion($_POST['txtExpi']);

        echo $this ->getModel()->insertarProducto();

    }else{
        $pagina='producto/nuevo';
    $this ->getView()->loadView($pagina);

    }
    




}
public function modificar(){
    
    if (!empty($_POST)) {
        $this ->getModel()->setId($_POST['txtCodigo']);
        $this ->getModel()->setNombre($_POST['txtNombre']);
        $this ->getModel()->setProveedor($_POST['txtProveedor']);
        $this ->getModel()->setTipo($_POST['txtTipo']);
        $this ->getModel()->setPrecio($_POST['txtPrecio']);
        $this ->getModel()->setFechaEntrada($_POST['txtEntrada']);
        $this ->getModel()->setFechaExpiracion($_POST['txtExpi']);

        echo $this ->getModel()->modificarProducto();


    }else{
        $Id=$_GET['id_producto'];
        $this->getModel()->setId($Id);
        $this->getview()->datos=$this->getModel()->productoFiltrado();
        $pagina='producto/modificar';
        $this->getView()->loadView($pagina);

       }
}



    //eliminar PRODUCTO
    public function eliminar(){
        $id = $_GET['id_producto'];
        $this ->getModel()->setId($id);
        echo $this -> getModel()-> eliminarProducto();
   }
   }
?>