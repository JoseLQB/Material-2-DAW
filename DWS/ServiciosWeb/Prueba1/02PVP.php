<?php
$url="http://localhost/ServiciosWeb/Prueba1/02Cliente.php"; 
$uri="http://localhost/ServiciosWeb/Prueba1"; 
$cliente = new SoapClient(null,array('location'=>$url,'uri'=>$uri)); 
$getPVP = $cliente->getPVP('3DSNG');
echo $getPVP;