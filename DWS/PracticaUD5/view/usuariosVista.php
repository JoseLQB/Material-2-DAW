<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<table>
    <tr>
        <th>Bienvenido usuario</th>
    <?php 
        foreach($arrayUsuario as $reg){
            echo "<tr><td>Nombre</td><td>" .$reg["usuario"]."</td></tr>";
            echo "<tr><td>Nombre</td><td>" .$reg["email"]."</td></tr>";
            echo "<tr><td>Nombre</td><td>" .$reg["rol"]."</td></tr>";
        }
    ?>
    </tr>
</table>
    
</body>
</html>