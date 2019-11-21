<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
        include "ejer1.php";
   
        foreach (ArrayBiInt(2,9, 10) as $key) {
            echo $key;
        }
        



    ?>
</body>
</html><!--function ArrayBiInt($min, $max, $tamañoArray){-->