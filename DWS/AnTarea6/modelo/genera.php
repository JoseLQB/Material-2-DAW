<?php
require_once("producto.php"); 
require_once("WSDLDocument.php");

$url="http://localhost/Material-2-DAW/DWS/AnTarea6/modelo/producto.php";
$uri="http://localhost/Material-2-DAW/DWS/AnTarea6/modelo";

$accion = new WSDLDocument("Producto",$url,$uri);
echo  $accion->saveXML();