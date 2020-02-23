<?php 
//Paso1, se crea el objeto SoapServer 
require_once("funciones.php");

$uri="http://localhost/ServiciosWeb/Prueba1"; 
$server = new SoapServer(null,array('uri'=>$uri)); 
 
$server->setClass('Producto');//se carga aquí la clase que contiene los métodos 
$server->handle();//Genera la respuesta del fichero html

?>