<?php
$cliente = new SoapClient( "http://fx.currencysystem.com/webservices/CurrencyServer4.asmx?WSDL" );
$parametros = array("licenseKey" => "", "currency" => "USD"); 
$currency = $cliente->CurrencyExists($parametros);
print("Resultado: ".$currency->CurrencyExistsResult);

?>