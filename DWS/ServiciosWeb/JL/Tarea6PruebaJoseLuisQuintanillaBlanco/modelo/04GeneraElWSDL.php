<?php 
//Paso 3, se generará el wdsl en el navegador 
require_once("Producto.php"); 
require_once("WSDLDocument.php");

$url="http://localhost/ServiciosWeb/JL/Tarea6PruebaJoseLuisQuintanillaBlanco/modelo/03Aver.php";
$uri="http://localhost/ServiciosWeb/JL/Tarea6PruebaJoseLuisQuintanillaBlanco/modelo"; 

$accion = new WSDLDocument("Producto",$url,$uri);
echo  $accion->saveXML();


?>