<?php 

require_once("model/Usuario.php");

$usuario = new usuarios();
$arrayusuarios = $usuario->getusuarios();

require_once("view/usuariosVista.php");

?>