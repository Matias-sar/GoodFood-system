<?php
class Cliente extends Controller{
    public function __construct()
    {
        parent:: __construct();
    }
    public function index(){
        $this->getView()->clientes=$this->getModel()->listadoCliente();
        
        $pagina='cliente/index';
        $this->getView()->loadView($pagina);   
    }




//modificar cliente
    public function modificar(){
        if(!empty($_POST)){

            $this ->getModel()->setId($_POST['txtCodigo']);
            $this ->getModel()->setNombre($_POST['txtNombre']);
            $this ->getModel()->setApellido($_POST['txtApellido']);
            $this ->getModel()->setInformacion($_POST['txtInfo']);
            
            echo $this ->getModel()->modificarCliente();

        }else{
            $id = $_GET['id_cliente'];
            $this ->getModel()-> setId($id);
    
            $this->getView()->datos=$this->getModel()->clienteFiltrado();
    
            $pagina = 'cliente/modificar';
            $this ->getView()->loadView($pagina);

        }
    
       
    }




// agregar cliente
    public function agregar(){
        if(!empty($_POST)){
            //todo desde la parte verdadera
            $this ->getModel()->setNombre($_POST['txtNombre']);
            $this ->getModel()->setApellido($_POST['txtApellido']);
            $this ->getModel()->setInformacion($_POST['txtInfo']);
           
    
            echo $this ->getModel()->insertarCliente();
    
        }else{
            $pagina='cliente/nuevo';
        $this ->getView()->loadView($pagina);
    
        }
    }

    // Modificar Cliente   

    
    // private $id;
    // private $nombre;
    // private $apellido;
    // private $informacion;



    public function eliminar(){
        $id = $_GET['id_cliente'];
        $this ->getModel()->setId($id);
        echo $this -> getModel()-> eliminarCliente();
   }
   







    // seccion de botones 
    //eliminar Cliente
    // public function eliminar(){ 
    //     $id = $_GET['aqui va el id del nombre de la caja id_cliente'];
    //     $this->getModel()->setId($id);
    //     echo $this->getModel()->eliminarCliente();

        
    // }
}

?>