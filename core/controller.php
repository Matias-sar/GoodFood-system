<?php
    class Controller{
        private $view;
        private $model;

        public function __construct(){
            $this->view = new View();
            session_start();
            $this->validarLogin();
        }

        public function getView(){
            return $this->view;
        }
        
        public function setView($view){
            $this->view = $view;
            return $this;
        }
    
        public function getModel(){
            return $this->model;
        }

        public function setModel($model){
            $this->model = $model;
            return $this;
        }
        
        public function loadModel($modelo){
            $this->model = new $modelo();
        }

        public function validarLogin(){
            if(isset($_SESSION['usuario'])){
                return true;
            }else{
                $pagina = 'inicio/login';
                $this->getView()->loadView($pagina);
            }
        }
}
?>