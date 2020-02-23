<?php 
//Paso1, se crea el objeto SoapServer 
require_once("funciones.php");

$uri="http://localhost/ServiciosWeb/Prueba3"; 
$server = new SoapServer(null,array('uri'=>$uri)); 
 
$server->setClass('Funciones');//se carga aquí la clase que contiene los métodos 
$server->handle();//Genera la respuesta del fichero html

?>