<?php 
//Creamos la sesion
session_start();
include("juego2.php");
//Creamos un objeto juego
$juego = new Juego("Metal Gear", "Hideo Kojima", "Accion", "Konami");
//Metemos el objeto en la sesion 
$_SESSION["juego"]=$juego;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php   
    echo "<br>El juego es ", $juego->getNombre();
    echo "<br>El autor es ", $juego->getAutor();
    ?>
    <br>
    <form action="juego2recibe.php" method="post">
    <input type="submit" value="Enviar">
    </form><!--Este formulario enviará la sesión con el objeto juego a la siguinte página, donde se mostrará-->
</body>
</html>