<?php

class grafico extends controller{


    public function __construct(){
        parent::__construct();
    }

public function circular(){
    $grafico = new chartphp();

    $datos[] =$this->getModel()->graficoCircular();

    $grafico->data = $datos;

    //diseño
    $grafico->chart_type = 'pie';
    $grafico->title= 'pedidos.';
    $grafico->color = ['purple','orange'];
    $grafico->theme = 'white';

    //grafico 

    $this->getView()->grafica=$grafico->render('c1');
    
$pagina= 'graficos/circular';
$this->getView()->loadView($pagina);

}
}
?>