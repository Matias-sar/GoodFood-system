<?php
    class Database{
    
        private $host;
        private $user;
        private $password;
        private $db;

        public function __construct(){
             $this -> host = "localhost";
             $this -> user = "root";
             $this -> password = "";
             $this -> db = "goodfood";
        }
        public function conectar(){
             $con = new mysqli(
                 $this -> host,
                 $this -> user,
                 $this -> password,
                 $this -> db
             );
             return $con;
        }
}

?>