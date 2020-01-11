<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        td{
            border:2px dotted darkblue;
        }
    </style>
</head>
<body>
<table>
    <tr>
        <th>Nombre del artículo</th>
    <?php 
        foreach($arrayProductos as $reg){
            echo "<tr><td>" .$reg["nombre_corto"]."</td></tr>";
        }
    ?>
    </tr>
</table>
</body>
</html>