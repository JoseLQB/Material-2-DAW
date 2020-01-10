<?php 

class Cliente{
    private $nombre;
    private $pass;

    public function __construct($nombre, $pass){
        $this->nombre = $nombre;
        $this->pass = $pass;
    }

    function login($host, $dbname, $name, $pass){
        include("funciones.php");
        conexionPDO("localhost", "dwes", "root", "");
    }


}

?>