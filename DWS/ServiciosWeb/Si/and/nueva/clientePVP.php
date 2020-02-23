<?php
$url="http://localhost/ejercicios/nueva/servicio.php"; 
$uri="http://localhost/ejercicios/nueva"; 
$cliente = new SoapClient(null,array('location'=>$url,'uri'=>$uri)); 
$getPVP = $cliente->getPVP('3DSNG');
echo $getPVP;