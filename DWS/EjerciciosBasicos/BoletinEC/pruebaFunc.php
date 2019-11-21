<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php
    function precio_con_iva(&$precio){

         $precio = $precio*1.18;
    }

    $precio = 20;
    precio_con_iva($precio);
    echo $precio;
    
    ?>
</body>
</html>