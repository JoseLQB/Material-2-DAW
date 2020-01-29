<?php

require_once "PizzeriaDB.php";

class Oferta{
    private $id;
    private $titulo;
    private $imagen;
    private $descripcion;

    function __construct($id, $titulo, $imagen, $descripcion){
        $this->id = $id;
        $this->titulo = $titulo;
        $this->imagen = $imagen;
        $this->descripcion = $descripcion;
    }

    public function getId(){
        return $this->id;
    }

    public function getTitulo(){
        return $this->titulo;
    }
    public function getImagen(){
        return $this->imagen;
    }
    public function getDescripcion(){
        return $this->descripcion;
    }

    public function insert(){
        $conexion = PizzeriaDB::connectDB();
        $insert = "INSERT INTO oferta(titulo, imagen, descripcion) VALUES ('$this->titulo', '$this->imagen', '$this->descripcion')";
        $conexion->exec($insert);
    }

    public function mostrarTodo(){
        $conexion = PizzeriaDB::connectDB();
        $mostrar = "SELECT * FROM oferta";
        //$conexion->exec($mostrar); en casao de que solo quiera ejecutar la query
        $resultadoConsulta = $conexion->query($mostrar);
        $array = [];
        while($regs = $resultadoConsulta->fetchObject()){
            $array[]= new Oferta($regs->id, $regs->titulo, $regs->imagen, $regs->descripcion);
        }
        
        return $array;

    }
    public function delete($id){
        $conexion = PizzeriaDB::connectDB();
        $delete = "DELETE FROM oferta WHERE id = $id";
        $conexion->exec($delete);
    }
}
