<?php
$url="http://localhost/ejercicios/nueva/servicio.php"; 
$uri="http://localhost/ejercicios/nueva"; 
$cliente = new SoapClient(null,array('location'=>$url,'uri'=>$uri)); 
$getStock = $cliente->getStock('3DSNG', '2');
echo $getStock;