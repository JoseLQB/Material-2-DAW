<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <h3>Selecciona un idioma</h3>
    <form action="" method="post">
        <input type="submit" value="Español" name="esp"><br>
        <input type="submit" value="Inglés" name="ing">
    </form>
    <?php

    if(isset($_POST["esp"])){
        setcookie("Español", "Español", time()+200);
        echo "Bienvenido";
        ?>
    <form action="cook0.php" method="post">
        <input type="submit" value="Vamos">
    </form><?php
    }elseif(isset($_POST["ing"])){
        setcookie("Ingles", "Ingles", time()+200);
        echo "Welcome";
        ?>
    <form action="cook0.php" method="post">
        <input type="submit" value="GO">
    </form>
    <?php
    }
    
    ?>
    <?php 
    
    ?>
</body>
</html>