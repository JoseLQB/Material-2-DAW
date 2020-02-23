<?php
require_once('Producto.php');
$uri="http://localhost/ServiciosWeb/JL/Tarea6PruebaJoseLuisQuintanillaBlanco/modelo"; 
$server = new SoapServer(null,array('uri'=>$uri));
$server->setClass('Producto');
$server->handle();
?>