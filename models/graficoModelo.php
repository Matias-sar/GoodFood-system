<?php


class GraficoModelo extends Model{

    public function __construct() {
    
        parent::__construct();
    }


    public function graficoCircular(){

        $sql = "SELECT nombre_producto, count(nombre_producto) as c from pedidos group by nombre_producto having c >0";
        $db = $this->getDb()->conectar();
        $stmt = $db->query($sql);
        while ($fila = $stmt->fetch_array()){
            $arreglo[]= $fila;
        }
        return $arreglo;
    }

 }


 ?>