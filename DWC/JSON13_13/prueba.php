<?php 

$datos = file_get_contents("ejercicio.json");
$json = json_decode($datos, true);

echo json_encode($json);

?>