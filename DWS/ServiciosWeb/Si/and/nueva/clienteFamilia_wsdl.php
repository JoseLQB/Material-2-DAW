<?php
$url="http://localhost/ejercicios/nueva/servicio.php"; 
$uri="http://localhost/ejercicios/nueva"; 
$cliente = new SoapClient("http://localhost/ejercicios/nueva/servicio.wsdl"); 
$getFalimilias = $cliente->getFamilias();
foreach ($getFalimilias as $key => $value) {
    echo $value.", ";
}