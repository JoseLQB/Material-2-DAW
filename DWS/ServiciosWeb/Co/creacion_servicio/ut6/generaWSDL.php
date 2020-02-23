<?php
require_once("calcula_com.php"); 
require_once("WSDLDocument.php");
$wsdl = new WSDLDocument( "Calcula", "http://localhost/ServiciosWeb/Co/creacion_servicio/ut6/servicio_clase.php", "http://localhost/ServiciosWeb/Co/creacion_servicio/ut6" ); 
echo $wsdl->saveXML();
