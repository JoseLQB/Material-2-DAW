<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

    <form action="" method="post">
    
    <input type="text" name="c1" id="">Establece la coockie 1<br>
    <input type="text" name="c2" id="">Establece la coockie 2<br>
    <input type="submit" value="Establecer" name="est">
    
    </form>

    <?php 

    if(isset($_POST["est"])){
        $c1 = $_POST["c1"];
        $c2 = $_POST["c2"];
        setcookie("Prueba", $c1, time() +30);
        setcookie("Prueba2", $c2, time() +30);
    }
    
    ?>
    <a href="eje2.php">Cambiar de página</a>
</body>
</html>