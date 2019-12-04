<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
    if(!isset($_COOKIE["Español"])&& !isset($_COOKIE["Ingles"])){
        header("Location:cook2.php");
    }elseif(isset($_COOKIE["Español"])) {
        ?><img src="http://contenidoepi.co/wp-content/uploads/2017/10/espa%C3%B1ol-1.png" alt=""> <?php
    }elseif(isset($_COOKIE["Ingles"])){
        echo "e";
        ?> <img src="https://imagenes.universia.net/gc/net/images/educacion/e/ej/eje/ejercicios-de-ingles.jpg" alt=""><?php
    }
    
    ?>
</body>
</html>