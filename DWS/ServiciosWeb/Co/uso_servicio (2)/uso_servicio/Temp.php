<?php

class FahrenheitToCelsius{
var $Fahrenheit;//string
}
class FahrenheitToCelsiusResponse{
var $FahrenheitToCelsiusResult;//string
}
class CelsiusToFahrenheit{
var $Celsius;//string
}
class CelsiusToFahrenheitResponse{
var $CelsiusToFahrenheitResult;//string
}
class TempCon 
 {
 var $soapClient;
 
private static $classmap = array('FahrenheitToCelsius'=>'FahrenheitToCelsius'
,'FahrenheitToCelsiusResponse'=>'FahrenheitToCelsiusResponse'
,'CelsiusToFahrenheit'=>'CelsiusToFahrenheit'
,'CelsiusToFahrenheitResponse'=>'CelsiusToFahrenheitResponse'

);

 function __construct($url='https://www.w3schools.com/xml/tempconvert.asmx?WSDL')
 {
  $this->soapClient = new SoapClient($url,array("classmap"=>self::$classmap,"trace" => true,"exceptions" => true));
 }
 
function FahrenheitToCelsius($FahrenheitToCelsius)
{

$FahrenheitToCelsiusResponse = $this->soapClient->FahrenheitToCelsius($FahrenheitToCelsius);

return $FahrenheitToCelsiusResponse;

}
function CelsiusToFahrenheit($CelsiusToFahrenheit)
{

$CelsiusToFahrenheitResponse = $this->soapClient->CelsiusToFahrenheit($CelsiusToFahrenheit);
return $CelsiusToFahrenheitResponse;

}
}


?>