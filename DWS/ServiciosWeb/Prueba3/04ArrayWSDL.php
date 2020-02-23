<?php 
$url="http://localhost/ServiciosWeb/Prueba3/servicios.wsdl";
$cliente = new SoapClient($url); 
$muestra = $cliente->productos2unidades();

var_dump(($muestra));
echo "<hr>";
foreach ($muestra as $key ) {
    echo $key . "<br>";
}
?>