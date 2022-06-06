<?php


class informeModelo extends Model{

    public function __construct() {
    
        parent::__construct();
    }


    public function DetallesCliente(){
        $sql = "SELECT  * FROM cliente ";
        $db = $this->getDb()->conectar();
        $stmt = $db->query($sql);
        while ($fila = $stmt->fetch_array()){
            $arreglo[]= $fila;
        }
        return $arreglo;
    
    
    }

    public function pedidos(){
        $sql = "SELECT  * FROM pedidos ";
        $db = $this->getDb()->conectar();
        $stmt = $db->query($sql);
        while ($fila = $stmt->fetch_array()){
            $arreglo[]= $fila;
        }
        return $arreglo;
    
    
    }


    

    public function detalles($codigo){
        
        $sql = "SELECT  * from cliente   inner join pedidos on cliente.id_cliente= pedidos.id_pedido where id_cliente=".$codigo;
        $db = $this->getDb()->conectar();
        $stmt = $db->query($sql);
        while ($fila = $stmt->fetch_array()){
            $arreglo[]= $fila;
        }
        return $arreglo;
    
    
    }

    public function existencia(){
        $sql = "SELECT  * FROM productos ";
        $db = $this->getDb()->conectar();
        $stmt = $db->query($sql);
        while ($fila = $stmt->fetch_array()){
            $arreglo[]= $fila;
        }
        return $arreglo;
    
    
    }


}

    ?>