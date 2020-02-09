<?php
        include "../modelo/producto.php";
        $familias=Producto::getFamilias();

        if (isset($_POST["enviar_Familia"])) {

            $familia=Producto::getProductosFamilia($_POST["cod_familia"]);
            $cadena = "Los codigos de los productos de la familia ".$_POST["cod_familia"]." son: ";
            foreach ($familia as $key => $value) {
                $cadena .= $value.", ";
            }
        }
        if (isset($_POST["getStock"])) {
            $stock=Producto::getStock($_POST["cod_producto"], $_POST["cod_tienda"]);
            $cadena = "El stock del producto: ".$_POST["cod_producto"]." en la tienda: ".$_POST["cod_tienda"]." es: ".$stock." unidad.";

        }
        if (isset($_POST["enviarPVP"])) {

            $pvp=Producto::getPvP($_POST["cod_producto"]);
            $cadena = "El PVP del producto: ".$_POST["cod_producto"]." es: ".$pvp."€.";
        }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
    

        echo "Estas son todas las Familias :<br>";
        foreach ($familias as $key => $value) {
            echo $value."<br>";
        }
        //var_dump($familias);

           
    ?>
    <form action="prueba.php" method="post" name="getProductosFamilia">
        <label>Numero de Familia: </label><input type="text" name="cod_familia">
        <input type="submit" value="Enviar Familia" name="enviar_Familia">
    </form>


    <form action="prueba.php" method="post" >
        <label>Codigo de Producto: </label><input type="text" name="cod_producto">
        <label>Codigo de Tienda: </label><input type="text" name="cod_tienda">
        <input type="submit" value="Enviar Stock" name="getStock">
    </form>


    <form action="prueba.php" method="post" name="getPvP">
        <label>Codigo de Producto: </label><input type="text" name="cod_producto">
        <input type="submit" value="Enviar PVP" name="enviarPVP">
    </form>

    <p>
    <?php
    if (isset($cadena)) {
        echo $cadena;    
    }
    ?>
    </p>
</body>
</html>