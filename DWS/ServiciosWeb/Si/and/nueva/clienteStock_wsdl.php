<?php
$cliente = new SoapClient("http://localhost/ejercicios/nueva/servicio.wsdl"); 
$getStock = $cliente->getStock('3DSNG', '2');
echo $getStock;



