<?php
require_once('producto.php');
$uri="http://localhost/Material-2-DAW/DWS/AnTarea6/modelo"; 
$server = new SoapServer(null,array('uri'=>$uri)); 
$server->setClass('Producto');//se carga aquí la clase que contiene los métodos 
$server->handle();//Genera la respuesta del fichero html
?>