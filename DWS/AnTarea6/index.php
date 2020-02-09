<?php
    include "modelo/producto.php";
    //$articulos = Producto::getArticulos();
    //($articulos);
    $familias=Producto::getFamilias();
    var_dump($familias);
?>