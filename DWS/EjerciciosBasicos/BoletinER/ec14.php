<!--Realiza un programa que diga si un número introducido por teclado es par y/o
divisible entre 5.-->
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
    $numero = 23;

    if($numero%2==0 && $numero%5==0){
        echo "El número " . $numero . " es par y divisible entre 5.";
    }elseif ($numero%2==0) {
        echo "El número " . $numero . " es par";
    }elseif ($numero%5==0) {
        echo "El número " . $numero . " es divisible entre 5.";
    }else {
        echo "El número " . $numero . " no es par ni divisible entre 5.";
    }
    ?>
    
</body>
</html>