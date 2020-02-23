<?php 
$url="http://localhost/ServiciosWeb/Prueba3/01creaSoap.php"; 
$uri="http://localhost/ServiciosWeb/Prueba3"; 
$cliente = new SoapClient(null,array('location'=>$url,'uri'=>$uri)); 
$muestra = $cliente->telefono(2);

echo $muestra
?>