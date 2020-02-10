<?php
require_once('calcula_com.php');
$uri="http://localhost/ut6"; 
$server = new SoapServer(null,array('uri'=>$uri)); 
$server->setClass('Calcula');
$server->handle();