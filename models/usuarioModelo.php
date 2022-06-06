<?php
//modeloUsiario
class UsuarioModelo extends model{
    private $id;
    private $nivel;
    private $nombre;
    private $pass;
    public function __construct(){
        parent::__construct();
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
     * Get the value of nivel
     */ 
    public function getNivel()
    {
        return $this->nivel;
    }

    /**
     * Set the value of nivel
     *
     * @return  self
     */ 
    public function setNivel($nivel)
    {
        $this->nivel = $nivel;

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
     * Get the value of pass
     */ 
    public function getPass()
    {
        return $this->pass;
    }

    /**
     * Set the value of pass
     *
     * @return  self
     */ 
    public function setPass($pass)
    {
        $this->pass = $pass;

        return $this;
    }
    //listado Usarios
    public function listadoUsuarios(){
        $arreglo = [];
        $sql = "SELECT p.id_usuario, p.nivel, p.nombre_usuario, p.password FROM usuario_sistema p";
        // $sql = "SELECT * FROM usuario_sistema ";
        $db = $this->getdb()-> conectar();
        $stmt = $db->query($sql);
        while($fila = $stmt->fetch_array()){
            $arreglo[] = $fila;
        }
        return $arreglo;
    }

    //aqui no se agrega el id porque es autoincrementable agregarlo a la db
    public function insertarUsuario(){
        $sql = "INSERT INTO usuario_sistema (nivel, nombre_usuario, password) VALUES(?,?,?)";
        $db = $this->getDb()->conectar();
        $stmt = $db->prepare($sql);
        //Metodo para establecerle valor a cada parametro
        $stmt->bind_param('iss', $this->nivel,$this->nombre,$this->pass);
        //Ejecutar la consulta
        //si esta bien devuelve un 1
        $stmt->execute();
        //numero de filas afectadas
        return $stmt->affected_rows;
    }
    //usuarioFiltrado
    public function UsuarioFiltrado(){
        $sql = "SELECT *FROM usuario_sistema WHERE id_usuario=?";
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
     //modificar Usuario
     public function modificarUsuario(){
        $sql = "UPDATE usuario_sistema SET nivel=?, nombre_usuario=?, password=? WHERE id_usuario=?";
        $db = $this->getDb()->conectar();
        $stmt = $db->prepare($sql);
        $stmt->bind_param('issi', $this->nivel, $this->nombre, $this->pass, $this->id);
        $stmt->execute();

        return $stmt->affected_rows;

    }
    public function eliminarUsuario(){
        $sql = "DELETE FROM usuario_sistema WHERE id_usuario=?";
        $db = $this->getDb()->conectar();
        $stmt = $db->prepare($sql);
        //Metodo para establecerle valor a cada parametro
        $stmt->bind_param('i', $this->id);
        //Ejecutar la consulta
        //si esta bien devuelve un 1
        $stmt->execute();
        //numero de filas afectadas
        return $stmt->affected_rows;
    }







}




?>