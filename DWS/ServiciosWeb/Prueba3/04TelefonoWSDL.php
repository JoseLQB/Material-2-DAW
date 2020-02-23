<?php 
$url="http://localhost/ServiciosWeb/Prueba3/servicios.wsdl";
$cliente = new SoapClient($url); 
$muestra = $cliente->telefono(1);

echo "<h7>Telefono: </h7> " .$muestra;
?>