<!--Escribe un programa que dada una hora determinada (horas y minutos), calcule los
segundos que faltan para llegar a la medianoche.-->
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
    $hora = 13;
    $minutos = 32;
    $horaf = 24 - $hora;
    $minutosf = 60 - $minutos;
    echo "Quedan " . $horaf . " horas y " . $minutosf . " minutos para la media noche.";
    ?>
    
</body>
</html>