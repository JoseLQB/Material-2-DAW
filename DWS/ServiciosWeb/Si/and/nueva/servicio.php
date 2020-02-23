<?php

require_once('producto.php');
$uri="http://localhost/ejercicios/nueva";  
$server = new SoapServer(null,array('uri'=>$uri));
$server->setClass('Producto');
$server->handle();
?>