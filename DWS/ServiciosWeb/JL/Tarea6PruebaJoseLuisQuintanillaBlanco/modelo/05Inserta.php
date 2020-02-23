<?php 
$url="http://localhost/ServiciosWeb/JL/Tarea6PruebaJoseLuisQuintanillaBlanco/modelo/elPutoWSDL.wsdl"; 

$cliente = new SoapClient($url); 
$var = $cliente->insert("QQWRDS3", "Moto voladora");
?>
