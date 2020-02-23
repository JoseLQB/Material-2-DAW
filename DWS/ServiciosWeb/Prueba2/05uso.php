
<?php ini_set('display_errors', 1); ini_set('display_startup_errors', 1); error_reporting(E_ALL); ?>
<?php
$cliente = new SoapClient("http://localhost/ServiciosWeb/Prueba2/servicios.wsdl"); 

echo "bb".$cliente->muestrameTitulo(3);

?>