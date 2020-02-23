<?php
    class Conexion extends PDO {
      private $datos = "mysql:host=localhost;dbname=tarea6;charset=utf8mb4";
      private $usuario = "root";
      private $pass = ""; 
      public function __construct(){
         try{
            parent::__construct($this->datos, $this->usuario, $this->pass);
            echo "ok";
         }catch(PDOException $e){
            echo 'Ha surgido un error y no se puede conectar a la base de datos. Detalle: ' . $e->getMessage();
            exit;
         } 
      }      
  }
  
  
?>
