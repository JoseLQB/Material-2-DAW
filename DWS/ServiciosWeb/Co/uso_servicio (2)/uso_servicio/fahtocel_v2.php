<?php
require_once('Temp.php'); 
// Creas los parámetros (una instancia de la clase FahrenheitToCelsius) 
$p = new FahrenheitToCelsius(); 
$p-> Fahrenheit = "10"; 

// Creas una instancia de la clase TempCon 
$cliente = new TempCon(); 
// Y llamas al método FahrenheitToCelsius 
$r = $cliente->FahrenheitToCelsius($p);
echo $r->FahrenheitToCelsiusResult;


?>