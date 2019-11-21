<!--Vamos a ampliar uno de los ejercicios de la relación anterior para considerar las
horas extras. Escribe un programa que calcule el salario semanal de un trabajador
teniendo en cuenta que las horas ordinarias (40 primeras horas de trabajo) se pagan a
12 euros la hora. A partir de la hora 41, se pagan a 16 euros la hora.
-->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

    <?php
        $salario = 12;
        $horas = 40;
        $horasExtra = 5;
        if($horasExtra>0){
            $salario = ($horas*$salario) + ($horasExtra +$horas)*16;
        }
        echo "Tu salario semanal es de ". $salario;
    ?>
    
</body>
</html>