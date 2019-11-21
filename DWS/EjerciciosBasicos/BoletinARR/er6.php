<!--Escribe un programa que genere 20 números enteros aleatorios entre 0 y 100 y que los
almacene en un array. El programa debe ser capaz de pasar todos los números pares a
las primeras posiciones del array (del 0 en adelante) y todos los números impares a
las celdas restantes. Utiliza arrays auxiliares si es necesario.
-->

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
    $arr =[];
    $pares = [];
    $impares = [];
    $par = 0;
    $impar = 0;
    //Creo la array principal y meto los números pares de esta en un array y los impares en otra
    for ($i=0; $i <20 ; $i++) { 
        $arr[$i] = mt_rand(0,100);
        if($arr[$i]%2==0){
            $pares[$par++] = $arr[$i];
        }else{
            $impares[$impar++] = $arr[$i];
        }
    }
    echo "Array principal: <br>";
    foreach ($arr as $v) {
        echo $v . " ";
    }
    //Cojo los números pares y los meto en la array ppal

    for ($j=0; $j < $par ; $j++) { 
        $arr[$j] = $pares[$j];
    }
    //Meto los impares en lo que queda de la ppal
    for ($j=$par; $j < 20 ; $j++) { 
        $arr[$j] = $impares[$j - $par];
    }
    echo "<br>Array ordenada: <br>";
   foreach ($arr as $key) {
       echo $key . " ";
   }
    ?>
</body>
</html>