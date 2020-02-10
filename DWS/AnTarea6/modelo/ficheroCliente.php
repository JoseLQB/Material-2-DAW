<?php

$url="http://localhost/Material-2-DAW/DWS/AnTarea6/modelo/servicio.php";
$uri="http://localhost/Material-2-DAW/DWS/AnTarea6/modelo";

$cliente = new SoapClient(null, array('location'=>$url,'uri'=>$uri));
$familias = $cliente->getFamilias();
print_r($familias);
?>