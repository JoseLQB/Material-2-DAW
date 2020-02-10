<?php
////////////////Vista y funcuinamiento del programa//////////////////////////
        include "../modelo/producto.php";
        $familias=Producto::getFamilias();

        if (isset($_POST["familia"])) {

            $familia=Producto::getProductosFamilia($_POST["codigoFamilia"]);
            $cadena = "Códigos de los productos".$_POST["codigoFamilia"]." son: ";
            foreach ($familia as $key => $value) {
                $cadena .= $value.", ";
            }
        }
        if (isset($_POST["stock"])) {
            $stock=Producto::getStock($_POST["codigoProducto"], $_POST["codigoTienda"]);
            $cadena = "Stock: ".$_POST["codigoProducto"]." en la tienda: ".$_POST["codigoTienda"]." es: ".$stock." unidad.";

        }
        if (isset($_POST["pvp"])) {

            $pvp=Producto::getPvP($_POST["codigoProducto"]);
            $cadena = "El PVP del producto: ".$_POST["codigoProducto"]." es: ".$pvp."€.";
        }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Prueba</title>
</head>
<body>
    <?php
        echo "Estas son todas las Familias :<br>";
        foreach ($familias as $key => $value) {
            echo $value."<br>";
        }    
    ?>
    <form action="prueba.php" method="post" name="getProductosFamilia">
        <label>Familia: </label><input type="text" name="codigoFamilia">
        <input type="submit" value="Enviar Familia" name="familia">
    </form>
    <form action="prueba.php" method="post" >
        <label>Producto: </label><input type="text" name="codigoProducto">
        <label>Tienda: </label><input type="text" name="codigoTienda">
        <input type="submit" value="Enviar Stock" name="stock">
    </form>
    <form action="prueba.php" method="post" name="getPvP">
        <label>Producto: </label><input type="text" name="codigoProducto">
        <input type="submit" value="Enviar PVP" name="pvp">
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