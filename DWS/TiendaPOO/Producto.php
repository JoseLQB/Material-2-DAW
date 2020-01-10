<?php 

class Producto{
    private $nombre_corto;
    private $cod;
    private $descripcion;
    private $PVP;

    public function __construct($nombre_corto, $cod, $descripcion, $PVP){
        $this->nombre = $nombre_corto;
        $this->cod = $cod;
        $this->descripcion = $descripcion;
        $this->precio = $PVP;
    }    
}

?>

