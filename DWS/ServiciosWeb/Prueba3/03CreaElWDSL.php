<?php 
//Paso 3, se generará el wdsl en el navegador 
require_once("funciones.php"); 
require_once("WSDLDocument.php");

$url="http://localhost/ServiciosWeb/Prueba3/01creaSoap.php";
$uri="http://localhost/ServiciosWeb/Prueba3";

$accion = new WSDLDocument("Funciones",$url,$uri);
echo  $accion->saveXML();


?>