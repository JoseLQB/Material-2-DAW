<?php 
$url="http://localhost/ServiciosWeb/JL/Tarea6PruebaJoseLuisQuintanillaBlanco/modelo/01CreaSoap.php"; 
$uri="http://localhost/ServiciosWeb/JL/Tarea6PruebaJoseLuisQuintanillaBlanco/modelo"; 
$cliente = new SoapClient(null,array('location'=>$url,'uri'=>$uri)); 
$muestra = $cliente->getProductosFamilia("ORDENA");

foreach ($muestra as $key) {
    echo $key .", ";
}
?>