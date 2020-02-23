<?php
$cliente = new SoapClient( "https://www.w3schools.com/xml/tempconvert.asmx?WSDL" );
$parametros = array("Fahrenheit" => "10"); 
$celsius = $cliente->FahrenheitToCelsius($parametros);
print("Resultado: ".$celsius->FahrenheitToCelsiusResult);

?>