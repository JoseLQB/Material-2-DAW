<?php 
//Paso 3, se generará el wdsl en el navegador 
require_once("funciones.php"); 
require_once("WSDLDocument.php");

$url="http://localhost/ServiciosWeb/Prueba2/03Aver.php";
$uri="http://localhost/ServiciosWeb/Prueba2";

$accion = new WSDLDocument("Oferta",$url,$uri);
echo  $accion->saveXML();


?>