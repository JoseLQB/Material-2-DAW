<?php 
    //Conexión mysqli, por comodidad lo hago en un fichero a parte
    $host = "localhost";
    $ususario = "root";
    $pass = "";
    $bdd = "dwes";

    $base = new mysqli($host, $ususario, $pass, $bdd);
    if ($base->connect_errno) {
        echo "Fallo al conectar a MySQL: (" . $base->connect_errno . ") " . $base->connect_error;
    } 
?>
