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
        echo "Las coockie no se han creado";
    }
    
    ?>
</body>
</html>