<!--Escribe un programa en que dado un número del 1 a 7 escriba el correspondiente
nombre del día de la semana.
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php

    $dia = "3"
    switch ($dia) {
        case '1':
        echo "lunes";
        break;
        case '2':
        echo "martes";
        break;
        case '3':
        echo "miercoles";
        break;
        case '4':
        echo "jueves";
        break;
        case '5':
        echo "viernes";
        break;
        case '6':
        echo "sabado";
        break;
        case '7':
        echo "domingo";
        break;
    }
    ?>
</body>
</html>