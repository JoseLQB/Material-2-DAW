<?php
require_once("calcula_com.php"); 
require_once("WSDLDocument.php");
$wsdl = new WSDLDocument( "Calcula", "http://localhost/ut6/servicio_clase.php", "http://localhost/ut6" ); 
echo $wsdl->saveXML();
