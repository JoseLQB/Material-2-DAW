<?php
$url="http://localhost/ejercicios/nueva/servicio.php"; 
$uri="http://localhost/ejercicios/nueva"; 
$cliente = new SoapClient("http://localhost/ejercicios/nueva/servicio.wsdl"); 
$getProductos = $cliente->getProductosFamilia('CAMARA');
foreach ($getProductos as $key => $value) {
    echo $value.", ";
}