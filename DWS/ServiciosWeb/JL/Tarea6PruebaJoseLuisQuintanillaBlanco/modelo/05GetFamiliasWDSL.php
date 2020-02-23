<?php 
$url="http://localhost/ServiciosWeb/JL/Tarea6PruebaJoseLuisQuintanillaBlanco/modelo/elPutoWSDL.wsdl"; 
$cliente = new SoapClient($url); 
$muestra = $cliente->getFamilias();


foreach ($muestra as $key) {
    echo $key .", ";
}

?>