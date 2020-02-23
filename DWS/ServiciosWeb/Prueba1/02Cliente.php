<?php 
$url="http://localhost/ServiciosWeb/Prueba1/02Cliente.php"; 
$uri="http://localhost/ServiciosWeb/Prueba1"; 
$cliente = new SoapClient(null,array('location'=>$url,'uri'=>$uri)); 
$getFalimilias = $cliente->getFamilias();
foreach ($getFalimilias as $key => $value) {
    echo $value;
}

?>