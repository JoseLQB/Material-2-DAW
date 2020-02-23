<?php

require_once('funciones.php');
$uri="http://localhost/ServiciosWeb/Prueba1";
$server = new SoapServer(null,array('uri'=>$uri));
$server->setClass('Producto');
$server->handle();
?>