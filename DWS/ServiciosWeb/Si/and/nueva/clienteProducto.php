<?php
$url="http://localhost/ejercicios/nueva/servicio.php"; 
$uri="http://localhost/ejercicios/nueva"; 
$cliente = new SoapClient(null,array('location'=>$url,'uri'=>$uri)); 
$getProductos = $cliente->getProductosFamilia('CAMARA');
foreach ($getProductos as $key => $value) {
    echo $value;
}