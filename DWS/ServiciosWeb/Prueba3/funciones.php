<?php 

require_once "conexion.php";

class Funciones{

    /**
     * 
     * Esta función devuelve el telefono de la tienda que se le pasa por parametro
     * 
     * @param int $codigoTienda
     * @return string $tlfs
     */

    public function telefono($codigoTienda){
        $conexion = Conexion::connectDB();
        $query = "SELECT tlf FROM tienda WHERE cod = \"".$codigoTienda."\"";
        $resultado = $conexion->prepare($query);
        $resultado->execute();
        while($regs = $resultado->fetchObject()){
            $tlfs = $regs->tlf;
        }
        return $tlfs;
    }

    /**
     * Esta función devuelve un array con los productos con dos unidades
     * 
     * @return array
     */

    public function productos2unidades(){
        $conexion = Conexion::connectDB();
        $query = "SELECT producto FROM stock WHERE unidades = 2";
        $resultado = $conexion->prepare($query);
        $resultado->execute();
        while($regs = $resultado->fetchObject()){
            $productos[]=$regs->producto;
        }
        return $productos;
    }
}


?>