<?php
// clase cliente

class ClienteModelo extends model{
    private $id;
    private $nombre;
    private $apellido;
    private $informacion;

    public function __construct()
    {
        parent:: __construct();
    }
    


   

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of nombre
     */ 
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set the value of nombre
     *
     * @return  self
     */ 
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get the value of apellido
     */ 
    public function getApellido()
    {
        return $this->apellido;
    }

    /**
     * Set the value of apellido
     *
     * @return  self
     */ 
    public function setApellido($apellido)
    {
        $this->apellido = $apellido;

        return $this;
    }

    /**
     * Get the value of informacion
     */ 
    public function getInformacion()
    {
        return $this->informacion;
    }

    /**
     * Set the value of informacion
     *
     * @return  self
     */ 
    public function setInformacion($informacion)
    {
        $this->informacion = $informacion;

        return $this;
    }

    // enlistar clientes
   //funciones Crud para listados es de recorrer
   public function listadoCliente(){
    // Arreglo para que no de error la tabla sin datos, todos los crud llevaran esto
    $arreglo = [];
    $sql = "SELECT * FROM cliente ";
     /*propiedad de model*/
     $db = $this->getDb()->conectar();
    
    $stmt = $db->query($sql);
    //Recorrerla
    while ($fila = $stmt->fetch_array()){
        $arreglo[] =$fila;
        
    }
    //Ir a controlador
        return $arreglo;
}
    //insertar cliente 
    public function insertarCliente(){
        $sql = "INSERT INTO cliente (nombre, apellido, informacion_contacto) VALUES(?,?,?)";
        $db = $this->getDb()->conectar();
        $stmt = $db->prepare($sql);
        $stmt->bind_param('sss', $this->nombre, $this->apellido, $this->informacion);
        $stmt->execute();

        return $stmt->affected_rows;

    }

    public function clienteFiltrado(){
        $sql = "SELECT *FROM cliente WHERE id_cliente=?";
        $db = $this->getDb()->conectar();
        $stmt = $db->prepare($sql);
        //Metodo para establecerle valor a cada parametro
        $stmt->bind_param('i', $this->id);
        //Ejecutar la consulta
        $stmt->execute();
        //si esta bien devuelve un 1
       $result = $stmt->get_result();
    //    Devuelve un Arreglo de datos con posiciones escalares y string
        return $result -> fetch_array();
    
    }
    //modificar Cliente
    public function modificarCliente(){
        $sql = "UPDATE cliente SET nombre=?, apellido=?, informacion_contacto=? WHERE id_cliente=?";
        $db = $this->getDb()->conectar();
        $stmt = $db->prepare($sql);
        $stmt->bind_param('sssi', $this->nombre, $this->apellido, $this->informacion, $this->id);
        $stmt->execute();

        return $stmt->affected_rows;

    }

  

  // conuslta eliminar cliente
  public function eliminarCliente(){
    $sql = "DELETE FROM cliente WHERE id_cliente=?";
    $db = $this->getDb()->conectar();
    $stmt = $db->prepare($sql);
    $stmt->bind_param('i', $this->id);
    $stmt->execute();

    return $stmt->affected_rows;

}

}

?>