<?php
    class Controller{
        private$view;
        private$model;

        public function __construct(){
            $this->view= new View();
        }

        public function loadModel($modelo){
            $this->model= new $modelo();
        }

         public function getView(){
            return $this->view;
        }
        
        public function getModel(){
            return $this->model;
        }
}
?>