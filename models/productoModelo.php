<?php

class ProductoModelo extends Model{
    //Datos de Producto
    private $id;
    private $nombre;
    private $proveedor;
    private $tipo;
    private $precio;
    private $fechaEntrada;
    private $fechaExpiracion;

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
     * Get the value of proveedor
     */ 
    public function getProveedor()
    {
        return $this->proveedor;
    }

    /**
     * Set the value of proveedor
     *
     * @return  self
     */ 
    public function setProveedor($proveedor)
    {
        $this->proveedor = $proveedor;

        return $this;
    }

    /**
     * Get the value of tipo
     */ 
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set the value of tipo
     *
     * @return  self
     */ 
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get the value of precio
     */ 
    public function getPrecio()
    {
        return $this->precio;
    }

    /**
     * Set the value of precio
     *
     * @return  self
     */ 
    public function setPrecio($precio)
    {
        $this->precio = $precio;

        return $this;
    }

    /**
     * Get the value of fechaEntrada
     */ 
    public function getFechaEntrada()
    {
        return $this->fechaEntrada;
    }

    /**
     * Set the value of fechaEntrada
     *
     * @return  self
     */ 
    public function setFechaEntrada($fechaEntrada)
    {
        $this->fechaEntrada = $fechaEntrada;

        return $this;
    }

    /**
     * Get the value of fechaExpiracion
     */ 
    public function getFechaExpiracion()
    {
        return $this->fechaExpiracion;
    }

    /**
     * Set the value of fechaExpiracion
     *
     * @return  self
     */ 
    public function setFechaExpiracion($fechaExpiracion)
    {
        $this->fechaExpiracion = $fechaExpiracion;

        return $this;
    }
    //funciones Crud para listados es de recorrer
    public function listadoProductos(){
        // Arreglo para que no de error la tabla sin datos, todos los crud llevaran esto
        $arreglo = [];
        $sql = "SELECT * FROM productos ";
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
    //listado marcas se tendria que agregar aca
    public function insertarProducto(){
        $sql = "INSERT INTO productos(nombre, proveedor, tipo, precio, fecha_entrada, fecha_expiracion) VALUES(?,?,?,?,?,?)";
        $db = $this->getDb()->conectar();
        $stmt = $db->prepare($sql);
        //Metodo para establecerle valor a cada parametro
        $stmt->bind_param('sssdss', $this->nombre, $this->proveedor,$this->tipo,$this
        ->precio, $this->fechaEntrada,$this->fechaExpiracion);
        //Ejecutar la consulta
        //si esta bien devuelve un 1
        $stmt->execute();
        //numero de filas afectadas
        return $stmt->affected_rows;
    }

    // Filtrar Productos
    public function productoFiltrado(){
        $sql = "SELECT *FROM productos WHERE id_producto=?";
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


    public function eliminarProducto(){
        $sql = "DELETE FROM productos WHERE id_producto=?";
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


    public function modificarProducto() {
        $sql = "UPDATE productos SET nombre=?, proveedor=?, tipo=?, precio=?, fecha_entrada=?,fecha_expiracion=? WHERE id_producto=?";
        
        $db = $this->getDb()->conectar();
        $stmt = $db->prepare($sql);
       
        $stmt->bind_param('sssdssi', $this->nombre, $this->proveedor,$this->tipo,$this->precio, $this->fechaEntrada,$this->fechaExpiracion,$this->id);
       
        $stmt->execute();
       
        return $stmt->affected_rows;
        
    }

}
?>

