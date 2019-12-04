<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
    
    setcookie("Prueba", "Esta es la información de nuestra cockie", time() -30);
    setcookie("Prueba2", "Otra coockie", time() -30);
    echo "Adios coockies";
    ?>
    <form action="eje2.php" method="post">
    <input type="submit" value="Atrás">
    </form>
</body>
</html>