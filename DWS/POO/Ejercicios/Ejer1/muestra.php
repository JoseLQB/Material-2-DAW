<?php 

include("clases.php");
session_start();
$animal = $_SESSION["animal"];
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
    
    <form action="delete.php" method="post">
        <input type="submit" name="del" value="Eliminar Sesion">
    </form>

    <?php

    echo "<b>Nombre del animal: </b>" . $animal->getNombre() ."<br><b>Sexo del animal: </b>" . $animal->getSexo() ."<hr>";

    if(isset($_POST["mue"])){
        $animal->muerde(); 
    }elseif(isset($_POST["can"])){
        $animal->canta();
    }elseif(isset($_POST["due"])){
        $animal->duerme();
    }elseif(isset($_POST["ara"])){
        $animal->araña();
    }elseif(isset($_POST["vue"])){
        $animal->vuela();
    }elseif(isset($_POST["des"])){
        $animal->deslizate();
    }elseif(isset($_POST["com"])){
        $animal->come();
    }elseif(isset($_POST["rep"])){
        $animal->repta();
    }
    ?>
</body>
</html>