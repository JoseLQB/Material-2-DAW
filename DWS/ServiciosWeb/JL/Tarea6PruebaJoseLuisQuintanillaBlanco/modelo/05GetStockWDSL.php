<?php 
$url="http://localhost/ServiciosWeb/JL/Tarea6PruebaJoseLuisQuintanillaBlanco/modelo/elPutoWSDL.wsdl"; 

$cliente = new SoapClient($url); 
$muestra = $cliente->getStock("ARCLPMP32GBN", "3");

echo $muestra
?>