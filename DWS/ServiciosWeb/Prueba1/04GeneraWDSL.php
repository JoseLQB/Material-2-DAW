<?php 
//Paso 3, se generará el wdsl en el navegador 
require_once("funciones.php"); 
require_once("WSDLDocument.php");

$url="http://localhost/ServiciosWeb/Prueba1/03Aver.php";
$uri="http://localhost/ServiciosWeb/Prueba1";

$accion = new WSDLDocument("Producto",$url,$uri);
echo  $accion->saveXML();


?>