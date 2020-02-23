<?php 
$url="http://localhost/ServiciosWeb/JL/Tarea6PruebaJoseLuisQuintanillaBlanco/modelo/01CreaSoap.php"; 
$uri="http://localhost/ServiciosWeb/JL/Tarea6PruebaJoseLuisQuintanillaBlanco/modelo"; 
$cliente = new SoapClient(null,array('location'=>$url,'uri'=>$uri)); 
$muestra = $cliente->getStock("ARCLPMP32GBN", "3");

echo $muestra
?>