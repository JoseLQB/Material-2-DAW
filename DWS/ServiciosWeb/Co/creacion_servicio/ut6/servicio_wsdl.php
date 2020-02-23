<?php
require_once('calcula_com.php');
$server = new SoapServer("http://localhost/ServiciosWeb/Co/creacion_servicio/ut6/servicio.wsdl"); 
$server->setClass('Calcula');
$server->handle();