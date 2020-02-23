<?php

require_once "conexion.php";

class Oferta{

    /**
     * Esta funcion recibirá una puta mierda y devolverá una mierda todavía más grande
     * 
     * @param int $id
     * @return string
     */

    public function muestrameTitulo($id){
        $conexion = Conexion::connectDB();
        $mostrar = "SELECT titulo FROM oferta WHERE id = \"".$id."\"";
        $resultado = $conexion->prepare($mostrar);
        $resultado->execute();
        while($regs = $resultado->fetchObject()){
           $titulo = $regs->titulo;
        }
        return $titulo;
    }

}

?>