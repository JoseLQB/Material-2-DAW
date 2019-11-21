<!--Muestra los números del 320 al 160, contando de 20 en 20 utilizando un bucle for.
Ejercicio 23
Muestra los números del 320 al 160, contando de 20 en 20 utilizando un bucle while.
Ejercicio 24
Muestra los números del 320 al 160, contando de 20 en 20 utilizando un bucle do-while.
-->
<!DOCTYPE html>
<html>
<head>
    <title>Document</title>
</head>
<body>

<?php

echo "<h3>Ejercicio 22</h3>";
for($x=320; $x>=160; $x=$x-20){
    echo $x . "<br>";
}
echo "<h3>Ejercicio 23</h3>";
$y = 320;
do{
    echo $y . "<br>";
    $y = $y-20;
}while($y>=160);

echo "<h3>Ejercicio 24</h3>";
$z = 320;
while($z>=160){
    echo $z . "<br>";
    $z = $z -20;
}
?>
    
</body>
</html>