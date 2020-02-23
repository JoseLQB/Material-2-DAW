<?php 

require_once 'conexion.php';

class Producto{
    
    /**
     * 
     * Esta función recibirá como parámetro el código de un
     * producto, y devolverá el PVP correspondiente al mismo. 
     * 
     * @param string $cod
     * @return float  
     */
    public function getPvP($cod) {
        $sql = "SELECT * FROM `producto` WHERE `cod` = \"".$cod."\"";
        $conn = new Conexion();
        $result = $conn->prepare($sql); 
        $result->execute();
        $conn=null;
        while ($registro = $result->fetchObject()) {

            $pvp = $registro->PVP;
        }
        return  $pvp;
    }
}


?>