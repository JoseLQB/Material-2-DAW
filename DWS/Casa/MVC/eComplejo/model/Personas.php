<?php 

    class Personas{
        private $db; //conexion
        private $personas;

        public function __construct(){
            require_once("model/Conn.php");
            $this->db=Conectar::conexion();//se llama al método conexion de la clase conectar
            $this->personas=array();
        }

        public function getPersonas(){//Devuelve todos los Personas en un array
            $consulta=$this->db->query("SELECT * FROM usuario");

            while($filas=$consulta->fetch(PDO::FETCH_ASSOC)){
                $this->personas[]=$filas;

            }
            return $this->personas;
        }
    }

?>