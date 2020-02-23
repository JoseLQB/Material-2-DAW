<?php 
$url="http://localhost/ServiciosWeb/Prueba3/01creaSoap.php"; 
$uri="http://localhost/ServiciosWeb/Prueba3"; 
$cliente = new SoapClient(null,array('location'=>$url,'uri'=>$uri)); 
$muestra = $cliente->productos2unidades();

var_dump(($muestra));
echo "<hr>";
foreach ($muestra as $key ) {
    echo $key . "<br>";
}
?>