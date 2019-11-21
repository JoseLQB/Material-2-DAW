<!--Escribe un programa que lea 15 números por teclado y que los almacene en un array.
Rota los elementos de ese array, es decir, el elemento de la posición 0 debe pasar a
la posición 1, el de la 1 a la 2, etc. El número que se encuentra en la última
posición debe pasar a la posición 0. Finalmente, muestra el contenido del array.-->
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

    echo "Array inicial: "  ;
    $array =[1,2,3,4,5,6,7,8,9,10,11,12,13,14,15];
    

    for ($i=0; $i <sizeof($array) ; $i++) { 
       echo $array[$i] .", ";
    }
    
    echo "<br>Rotación: ";

    $num = $array[14];
    for($j=14; $j>0; $j--){
        $array[$j] = $array[$j-1];
    }
    $array[0]= $num;

    for ($i=0; $i <sizeof($array) ; $i++) { 
        echo $array[$i] .", ";
    }

    
        
    
    
    ?>
</body>
</html>