<!--Escribe un programa que genere 100 números aleatorios del 0 al 20 y que los muestre
por pantalla separados por espacios. El programa pedirá entonces por teclado dos
valores y a continuación cambiará todas las ocurrencias del primer valor por el
segundo en la lista generada anteriormente.
Los números que se han cambiado deben aparecer resaltados de un color diferente.
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php

$arr = [];
$val1 = 3;
$val2 = 6;

for($i=0; $i<=100 ; $i++) { 
    $arr[$i] = mt_rand(0,20);
}
echo "Array de número aleatorios: ";

for($j=0; $j<sizeof($arr); $j++) { 
    echo $arr[$j] . " ";
}
echo "<br>";

for($k=0; $k<sizeof($arr); $k++){
    if($arr[$k] == $val1){
        $arr[$k] = "<font color='red'> " . $val2 . "</font>";
    }
}
echo "<br>";
for($j=0; $j<sizeof($arr); $j++) { 
    echo $arr[$j] . " ";
}
?>
</body>
</html>