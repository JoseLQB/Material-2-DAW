<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <title>Document</title>
</head>
<body>
    <h3>Te muestro cosas</h3>
    <p>Qué vas a hacer</p>
    <form action="controller/verOfertasController.php" method="post">
        <input type="submit" name="insertar" value="Insertar">   
    </form>

    <form action="controller/verOfertasController.php" method="post"> 
        <input type="submit" name="borrar" value="Borrar">   
    </form>
    <form action="controller/orderByName.php" method="post"> 
        <input type="submit" name="order" value="ordenar">   
    </form>
</body>
</html>