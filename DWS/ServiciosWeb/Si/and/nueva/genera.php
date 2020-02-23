<?php
        require_once('producto.php');
        require_once('WSDLDocument.php');       

$wsdl = new WSDLDocument( "Producto", "http://localhost/ejercicios/nueva/servicio.php", "http://localhost/ejercicios/nueva" ); 
echo $wsdl->saveXML();
 
?>