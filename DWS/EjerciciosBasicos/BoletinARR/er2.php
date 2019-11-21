<!--Escribe un programa que pida 10 números por teclado y que luego muestre los números
introducidos junto con las palabras “máximo” y “mínimo” al lado del máximo y del
mínimo respectivamente.
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php

$arr = [3,4,5,3,98,65,43,22,66,1];
$max = 0;
$min = $arr[0];

for ($i=0; $i < sizeof($arr) ; $i++) { 
    if($arr[$i]>$max){
        $max=$arr[$i];
    }elseif ($arr[$i]<$min) {
        $min=$arr[$i];
    }
}

echo "Máximo: " . $max. "<br>";
echo "Mínimo: " . $min;
?>
    
</body>
</html>