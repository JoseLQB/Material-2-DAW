<?php
function suma($a,$b){ 
	return $a+$b; 
} 

function resta($a,$b){ 
	return $a-$b; 
} 

$uri="http://localhost/ut6"; 
$server = new SoapServer(null,array('uri'=>$uri)); $server->addFunction("suma"); 
$server->addFunction("resta"); 
$server->handle();