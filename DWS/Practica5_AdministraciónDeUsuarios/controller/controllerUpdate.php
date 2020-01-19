<?php 


require_once('../Model/UsuarioDb.php');

$ide = "";
$us = $_POST['nombre'];
$mail = $_POST['correo'];
$rol = $_POST['rpg'];
$pass = $_POST['contraseña'];

$usuario = new UsuarioDb();
$insert = $usuario->nuevoUsuario($ide, $us, $mail, $rol, $pass);
header("location:controllerUserVista.php");



?>