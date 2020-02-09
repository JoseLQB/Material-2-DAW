<?php 

$nombre = $_POST["nombre"];
$contraseña = $_POST["contrasena"];


if($nombre == "Jose" && $contraseña == "1234"){
    echo "<h3>Bienvenido " . $nombre . "</h3>";
}else{
    echo "Te has logueado mal <br>";
    echo '<input type="button" value="Salir" id="salir">';
}

?>