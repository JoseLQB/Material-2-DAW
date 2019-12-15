<?php 
//Creamos la sesion
session_start();
include("juego2.php");
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
    
    if(isset($_POST["ver"])){
        
        //Creamos un objeto juego con los datos del formulario
        $juego = new Juego($_POST["nom"], $_POST["aut"], $_POST["gen"], $_POST["com"]);
        echo "<br>El juego es ", $juego->getNombre();
        echo "<br>El autor es ", $juego->getAutor();
        echo "<br>El género es ", $juego->getGenero();
        echo "<br>La compaía es ", $juego->getCompañia();
        //Metemos el objeto en la sesion 
        $_SESSION["juego"]=$juego;

    }else{
        ?>
        <form action="" method="post">
            <h3>Introduce los datos de un videojuego</h3>
            <input type="text" name="nom" id="">Nombre<br>
            <input type="text" name="aut" id="">Autor <br>
            <input type="text" name="gen" id="">Género <br>
            <input type="text" name="com" id="">Compañía <br>
        <input type="submit" value="Enviar" name="ver">
        </form>
        <?php
    }
    ?>
    <br>
    <form action="juego2recibe.php" method="post">
    <input type="submit" value="Mostrar en otra página">
    </form><!--Este formulario enviará la sesion con el objeto juego a la siguinte página, donde se mostrará-->
</body>
</html>