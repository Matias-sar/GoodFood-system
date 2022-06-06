<?php
   class Inicio extends Controller{

      public function __construct(){
         parent::__construct();
      }

      public function home(){
         $pagina = 'inicio/home';
         $this->getView()->loadView($pagina);
      }

      public function login(){
         if(!empty($_POST)){
            $this->getModel()->setUsuario($_POST['username']);
            $this->getModel()->setPassword($_POST['password']);

            $nivel = $this->getModel()->validarLogin();
            if(!empty($nivel)){
               $_SESSION['usuario'] = $_POST['username'];
               $_SESSION['nivel'] = $nivel[0];
               $this->home(); 
            }
         }else{
            $pagina = 'inicio/login';
            $this->getView()->loadView($pagina);
         }
      }

      public function logout(){
         session_destroy();
         $this->login();
      }
    }
    
?>