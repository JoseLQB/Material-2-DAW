<!--Ejercicio 16
/*Muestra los números capicúa que hay entre 1 y 99999.
 -->

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
        include "ejer1.php";
        for($i=0; $i<=9999; $i++){
            if(esCapicua($i)==true){
                echo $i + "<br>";
            }
        }
    ?>

</body>
</html>