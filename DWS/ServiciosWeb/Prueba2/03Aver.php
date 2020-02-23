<?php
require_once('funciones.php');
$uri="http://localhost/ServiciosWeb/Prueba2";
$server = new SoapServer(null,array('uri'=>$uri));
$server->setClass('Oferta');
$server->handle();
?>