<!--Realiza un programa que pida 8 números enteros y que luego muestre esos números de
colores, los pares de un color y los impares de otro.-->
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<font color="red">Numeros pares-</font>
<font color="blue">-Numeros impares</font><br>
    <?php
    
    $arr =[];
    for ($i=0; $i<8 ; $i++) {
        $arr[$i] = mt_rand(0,1000);
        if($arr[$i]%2==0){
            echo "<font color='red'> " .$arr[$i] . " " . "</font>";
        }else{
            echo "<font color='blue'> " .$arr[$i] . " " . "</font>";
        }
    }
    ?>
</body>
</html>