<!--Realiza un programa que pida una hora por teclado y que muestre luego buenos días,
buenas tardes o buenas noches según la hora. Se utilizarán los tramos de 6 a 12, de
13 a 20 y de 21 a 5. respectivamente. Sólo se tienen en cuenta las horas, los
minutos no se deben introducir por teclado.
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php

    $hora = 23;

    if($hora>=6 && $hora<12){
        echo "buenos días";
    }elseif ($hora>=12 && $hora<20) {
        echo "buenas tardes";
    }elseif (($hora>=20 && $hora<=23) ||($hora>=0 && $hora<6)) {
        echo "buenas noches";
    }else {
        echo "no has introducido una hora correcta";
    }

    
    ?>
</body>
</html>