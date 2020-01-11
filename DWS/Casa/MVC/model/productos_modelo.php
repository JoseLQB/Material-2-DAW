<?php 

    class Productos{
        private $db; //conexion
        private $productos;

        public function __construct(){
            require_once("model/conn.php");
            $this->db=Conectar::conexion();//se llama al método conexion de la clase conectar
            $this->productos=array();
        }

        public function getProductos(){//Devuelve todos los productos en un array
            $consulta=$this->db->query("SELECT * FROM producto");

            while($filas=$consulta->fetch(PDO::FETCH_ASSOC)){
                $this->productos[]=$filas;

            }
            return $this->productos;
        }
    }

?>