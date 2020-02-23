
<?php ini_set('display_errors', 1); ini_set('display_startup_errors', 1); error_reporting(E_ALL); ?>
<?php
$cliente = new SoapClient("http://localhost/ServiciosWeb/Prueba1/servicios.wsdl"); 
$pvp = $cliente->getPVP('3DSNG');
var_dump($pvp);
echo "precio: ".$pvp;
?>