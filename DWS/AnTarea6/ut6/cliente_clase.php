<?php
$url="http://localhost/ut6/servicio_clase.php"; 
$uri="http://localhost/ut6"; 
$cliente = new SoapClient(null,array('location'=>$url,'uri'=>$uri)); 
$suma = $cliente->suma(2,3);
$resta = $cliente->resta(2,3); 
print("La suma es ".$suma); 
print("<br />La resta es ".$resta);