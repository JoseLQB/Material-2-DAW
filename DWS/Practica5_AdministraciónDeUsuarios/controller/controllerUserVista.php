<?php 
require_once('../Model/UsuarioDb.php');

$usuario = new UsuarioDb;
$arrayUsuario = $usuario->getUsuario();
require_once("../view/vistaAdmin.php");
?>
</body>
</html>
