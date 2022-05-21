<?php

class InicioModelo extends Model{
    private $usuario;
    private $password;
    private $nivel_acceso;

    public function __construct(){
        parent::__construct();
    }

    public function getUsuario(){
        return $this->usuario;
    }

    public function setUsuario($usuario){
        $this->usuario = $usuario;
        return $this;
    }

    public function getPassword(){
        return $this->password;
    }

    public function setPassword($password){
        $this->password = $password;
        return $this;
    }

    public function getNivel_acceso(){
        return $this->nivel_acceso;
    }

    public function setNivel_acceso($nivel_acceso){
        $this->nivel_acceso = $nivel_acceso;
        return $this;
    }
    
    public function validarLogin(){
        $sql = "SELECT nivel FROM usuario_sistema WHERE nombre_usuario = ? AND password = ?";
        $db = $this->getDb()->conectar();
        $stmt = $db->prepare($sql);
        $stmt->bind_param('ss',$this->usuario,$this->password);
        $stmt->execute();
        $result = $stmt->get_result();

        return $result->fetch_array();
    }

}

?>