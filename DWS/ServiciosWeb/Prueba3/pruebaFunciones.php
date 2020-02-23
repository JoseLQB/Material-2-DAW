<?php

require_once "funciones.php";

$mostrar = funciones::telefono(2);
$mostrar2 = funciones::productos2unidades();

echo $mostrar;

var_dump(($mostrar2));

foreach ($mostrar2 as $key ) {
    echo $key . "<br>";
}


?>