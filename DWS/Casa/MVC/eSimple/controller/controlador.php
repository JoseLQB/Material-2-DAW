<?php 
    require_once("model/productos_modelo.php");

    $producto = new Productos();
    $arrayProductos = $producto->getProductos();



    require_once("view/productos_view.php");


?>