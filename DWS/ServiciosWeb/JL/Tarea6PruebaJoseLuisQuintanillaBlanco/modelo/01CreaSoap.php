<?php 
//Paso1, se crea el objeto SoapServer 
require_once("Producto.php");

$uri="http://localhost/ServiciosWeb/JL/Tarea6PruebaJoseLuisQuintanillaBlanco/modelo"; 
$server = new SoapServer(null,array('uri'=>$uri)); 
 
$server->setClass('Producto');//se carga aquí la clase que contiene los métodos 
$server->handle();//Genera la respuesta del fichero html

?>