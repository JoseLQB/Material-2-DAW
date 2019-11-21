<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php

$semana = date("w");
$dia = date("a");
$mes =date("m");
switch ($semana) {
    case 1:
        echo "lunes";
        break;
        case 2:
        echo "martes";
        break;
        case 3:
        echo "miercoles";
        break;
        case 4:
        echo "jueves";
        break;
        case 5:
        echo "viernes";
        break;
        case 6:
        echo "sabado";
        break;
        case 7:
        echo "domingo";
        break;
}

switch ($mes) {
        case 01:
        echo "enero";
        break;
        case 02:
        echo "febrero";
        break;
        case 03:
        echo "marzo";
        break;
        case 04:
        echo "abril";
        break;
        case 05:
        echo "mayo";
        break;
        case 06:
        echo "junio";
        break;
        case 07:
        echo "julio";
        break;
        case 08:
        echo "agosto";
        break;
        case 09:
        echo "septiembre";
        break;
        case 10:
        echo "octubre";
        break;
        case 11:
        echo "noviembre";
        break;
        case 12:
        echo "diciembre";
        break;
}
?>
</body>
</html>