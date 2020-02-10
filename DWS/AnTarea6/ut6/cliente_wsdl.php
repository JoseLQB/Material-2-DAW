<?php
$cliente = new SoapClient("http://localhost/ut6/servicio.wsdl"); 
$suma = $cliente->suma(2,3);
$resta = $cliente->resta(2,3); 
print("La suma es ".$suma); 
print("<br />La resta es ".$resta);