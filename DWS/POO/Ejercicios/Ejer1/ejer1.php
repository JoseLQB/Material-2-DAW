<!--Crea las clases Animal, Mamifero, Ave, Gato, Perro, Canario, Pinguino y Lagarto. Crea,
al menos, tres métodos específicos de cada clase y redefine el/los método/s cuando
sea necesario. Prueba las clases en un programa en el que se instancien objetos y se
les apliquen métodos. Puedes aprovechar las capacidades que proporciona HTML y
CSS para incluir imágenes, sonidos, animaciones, etc.para representar acciones de
objetos; por ejemplo, si el canario canta, el perro ladra, o el ave vuela.
-->
<?php 
session_start();
include("clases.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
    if(isset($_POST["env"]) && isset($_POST["animal"])){
        $tipo = $_POST["animal"];
        if($tipo == "perro"){
            $animal = new Perro($_POST["nombre"], $_POST["sexo"]);
            $_SESSION["animal"] = $animal;
            ?>
            <form action="muestra.php" method="post">
                <input type="submit" name="mue" value="Muerde">
                <input type="submit" name="can" value="Canta">
                <input type="submit" name="due" value="Duerme">
            </form>
            <?php
        }elseif($tipo == "gato"){
            $animal = new Gato($_POST["nombre"], $_POST["sexo"]);
            $_SESSION["animal"] = $animal;
            ?>
            <form action="muestra.php" method="post">
                <input type="submit" name="ara" value="Araña">
                <input type="submit" name="can" value="Canta">
                <input type="submit" name="due" value="Duerme">
            </form>
            <?php

        }elseif($tipo == "canario"){
            $animal = new Canario($_POST["nombre"], $_POST["sexo"]);
            $_SESSION["animal"] = $animal;
            ?>
            <form action="muestra.php" method="post">
                <input type="submit" name="vue" value="Vuela">
                <input type="submit" name="can" value="Canta">
                <input type="submit" name="due" value="Duerme">
            </form>
            <?php
        }elseif($tipo == "pinguino"){
            $animal = new Pinguino($_POST["nombre"], $_POST["sexo"]);
            $_SESSION["animal"] = $animal;
            ?>
            <form action="muestra.php" method="post">
                <input type="submit" name="vue" value="Vuela">
                <input type="submit" name="can" value="Canta">
                <input type="submit" name="des" value="Deslizate">
            </form>
            <?php
        }elseif($tipo == "lagarto"){
            $animal = new Lagarto($_POST["nombre"], $_POST["sexo"]);
            $_SESSION["animal"] = $animal;
            ?>
            <form action="muestra.php" method="post">
                <input type="submit" name="rep" value="Repta">
                <input type="submit" name="can" value="Canta">
                <input type="submit" name="com" value="Come">
            </form>
            <?php
        } 
    }else{
        ?>
            <p>Selecciona un animal</p>
            <form action="" method="post">
            <select name="animal" id="">
                <option value="perro">Perro</option>
                <option value="gato">Gato</option>
                <option value="canario">Canario</option>
                <option value="pinguino">Pigüino</option>
                <option value="lagarto">Lagarto</option>
            </select>
            <p>Selecciona Sexo del animal</p>
            <select name="sexo" id="">
                <option value="macho">Macho</option>
                <option value="hembra">Hembra</option>
            </select>
            <p>Escribe el nombre del animal</p>
            <input type="text" name="nombre" id="">
            <hr>
            <input type="submit" name="env" value="Enviar">
            
            </form>
        <?php 
    }
    
    ?>
    
</body>
</html>