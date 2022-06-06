<?php
class Usuario extends Controller{
    public function __construct(){
        parent::__construct();
    }

    public function index (){

        $this->getView()-> usuarios = $this->getModel()->listadoUsuarios();

        $pagina = 'usuario/index';
        // echo ' esta es una Usuarios';
        $this ->getView()->loadView($pagina);
     }

     // agregar Usuario
    public function agregar(){
        if(!empty($_POST)){
            //todo desde la parte verdadera
            // $this ->getModel()->setId($_POST['']);
            $this ->getModel()->setNivel($_POST['txtNivel']);
            $this ->getModel()->setNombre($_POST['txtUsuario']);
            $this ->getModel()->setPass($_POST['txtPass']);

           
    
            echo $this ->getModel()->insertarUsuario();
    
        }else{
            $pagina='usuario/nuevo';
        $this ->getView()->loadView($pagina);
    
        }
        }
        //modificar Usuario
    public function modificar(){
        if(!empty($_POST)){
               $this ->getModel()->setId($_POST['txtId']);
            $this ->getModel()->setNivel($_POST['txtNivel']);
            $this ->getModel()->setNombre($_POST['txtUsuario']);
            $this ->getModel()->setPass($_POST['txtPass']);
            echo $this ->getModel()->modificarUsuario();

        }else{
            $id = $_GET['id_usuario'];
            $this ->getModel()-> setId($id);
    
            $this->getView()->datos=$this->getModel()->UsuarioFiltrado();
    
            $pagina = 'usuario/modificar';
            $this ->getView()->loadView($pagina);

        }
    }

        //eliminarUsuario
    public function eliminar(){
        $id = $_GET['id_usuario'];
        $this ->getModel()->setId($id);
        echo $this -> getModel()-> eliminarUsuario();
   }



    }




?>