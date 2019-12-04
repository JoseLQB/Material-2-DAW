<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php

    if(isset($_COOKIE["Prueba"])&&(isset($_COOKIE["Prueba2"]))){
        echo $_COOKIE["Prueba"];
        echo "<br>";
        echo $_COOKIE["Prueba2"];
    }else{
        echo "Las coockies no se han creado<br>";
    }
    
    
    ?>
    <a href="eje1.php">Volver</a><br>
    <a href="eje3.php">Borrar</a>
</body>
</html>