<!--Escribe un programa que diga cuál es la primera cifra de un número entero
introducido por teclado.
Se permiten números de hasta 5 cifras.-->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php
$numero = 655;
$primeraCifra = 0;

if($numero>=10 && $numero<100){
    $primeraCifra = $numero/10;
}elseif ($numero>100 && $numero<1000) {
    $primeraCifra = $numero/100;
}elseif ($numero>1000 && $numero<10000) {
    $primeraCifra = $numero/1000;
}

$primeraCifra =str_split($primeraCifra);

echo "La primera cifra es " . $primeraCifra[0];
?>
    
</body>
</html>