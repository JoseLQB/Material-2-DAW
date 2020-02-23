<?php 
$url="http://localhost/ServiciosWeb/Prueba2/01creaSoap.php"; 
$uri="http://localhost/ServiciosWeb/Prueba2"; 
$cliente = new SoapClient(null,array('location'=>$url,'uri'=>$uri)); 
$muestra = $cliente->muestrameTitulo(3);

echo $muestra
?>