<?php
    class conexion{

         private $conn;

        //creamos el constructor de la clase coneccion en este metodo conectamos con la DB
        public function __construct(){
            
            require_once('./conexion.php');
            
            $this->conn=new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
          
            if($this->conn->connect_error){
                die('Error al conectar con la base de datos : '.$this->conn->connect_error);
            }
        }

 
        public function   getConnection(){
            return $this->conn;
        }


        public function  closeConnection(){
            $this->conn->close();
        }
    }
?>