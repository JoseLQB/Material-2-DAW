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
        
        setcookie("Idioma", "", time() -50);
        setcookie("Perfil", "", time() -50);
        setcookie("Hora","", time() -50);
        echo "<br><font color='red'>Información de la sesión eliminada</font>";
    }
    

    if(isset($_COOKIE["Idioma"])&&(isset($_COOKIE["Perfil"]))&&(isset($_COOKIE["Hora"]))&& !isset($_POST["borrar"])){
        echo "Tu idioma es el " . $_COOKIE["Idioma"].".<br>";
        echo "Tu perfil " . $_COOKIE["Perfil"]. " será público.<br>";
        echo "Tú zona horaria es " .$_COOKIE["Hora"].".<br>";
    }else{
        echo "<br>No hay información";
    }
    ?>
</body>
</html>