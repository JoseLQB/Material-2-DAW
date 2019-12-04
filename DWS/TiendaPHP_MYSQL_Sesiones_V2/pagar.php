<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="styles/styles.css">
</head>
<body>
    <?php
    session_start();
    if(!isset($_SESSION["usuario"])){
        header("location:login.php");
    }else{
        $_SESSION["cesta"]=[];//Vacío la cesta para que cuando le de a hacer una compra nueva
        ?><h2>¡Gracias por su compra!</h2><br><hr>

        <a href="productos.php"><button>Hacer una nueva compra</button></a>
        <br><br><br><a href="logoff.php"><input type="button" value="Cerrar Sesion"></a>
        <?php
    }
    ?>
    
</body>
</html>