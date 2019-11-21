<!--Realiza un programa que nos diga cuántos dígitos tiene un número entero que puede ser
positivo o negativo. Se permiten números de hasta 5 dígitos.-->
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
    $numero = 2323445;
    $arr = str_split($numero);
    echo $numero . " tiene " .sizeof($arr) . " cifras.";
    ?>
</body>
</html>