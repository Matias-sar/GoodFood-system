<?php
   class Inicio extends Controller{

      public function __construct(){
         parent::__construct();
      }

      public function home(){
         $pagina = 'inicio/index';
         $this->getView()->loadView($pagina);
        }
    }
    
?>