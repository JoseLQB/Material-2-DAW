<?php
$url="http://localhost/ejercicios/nueva/servicio.php"; 
$uri="http://localhost/ejercicios/nueva"; 
$cliente = new SoapClient(null,array('location'=>$url,'uri'=>$uri)); 
$getFalimilias = $cliente->getFamilias();
foreach ($getFalimilias as $key => $value) {
    echo $value;
}