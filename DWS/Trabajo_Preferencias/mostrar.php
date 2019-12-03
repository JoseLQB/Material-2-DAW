<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <div class="most">
        <h3>Estas son tus preferencias</h3>


        <form action="mostrar.php" method="post">
            <input type="submit" value="Borrar preferencias" name="borrar"><br>
            <a href="preferencias.php">Establecer preferencias</a>
        </form>
    </div>
    <?php 
    if(isset($_POST["borrar"])){
        
        session_destroy();
        echo "<br><font color='red'>Información de la sesión eliminada</font>";
    }
    

    if(isset($_SESSION["idioma"])&&(isset($_SESSION["perfil"]))&&(isset($_SESSION["hora"]))&& !isset($_POST["borrar"])){
        echo "Tu idioma es el " . $_SESSION["idioma"].".<br>";
        echo "Tu perfil " . $_SESSION["perfil"]. " será público.<br>";
        echo "Tú zona horaria es " .$_SESSION["hora"].".<br>";
    }else{
        echo "<br>No hay información";
    }
    ?>
</body>
</html>