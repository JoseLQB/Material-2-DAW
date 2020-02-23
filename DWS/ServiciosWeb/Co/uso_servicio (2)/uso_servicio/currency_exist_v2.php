<?php
require_once('Currency.php'); 
// Creas los parámetros (una instancia de la clase CurrencyExists)
$p = new CurrencyExists(); 
//$p -> licenseKey = ""; 
$p -> currency = "USD";

$cliente = new Currency(); 
// Y llamas al método CurrencyExists
$r = $cliente->CurrencyExists($p);
echo $r->CurrencyExistsResult;


?>