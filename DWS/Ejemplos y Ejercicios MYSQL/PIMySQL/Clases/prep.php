<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>
    <?php
    $servidor = "localhost";
    $usuario = "root";
    $password = "";
    $bbdd = "dwes";
    $conexion = mysqli_connect("localhost", "root", "", "dwes");
    if (!$conexion) {
        echo "Error: " . mysqli_connect_errno() . PHP_EOL;
    }
    $consulta = "SELECT nombre_corto, cod FROM producto";
    $ejec = mysqli_query($conexion, $consulta);
    if (!$ejec) {
        echo "Hay un error: " . $sql . "<br>" . mysqli_error($coexion);
    }
    
    ?>
    <form action="prep.php" method="post">
        <select name="selectt">
            <?php
            foreach ($ejec as $opc) {
                if($_POST['selectt'] == $opc['cod']){
                ?>
                    <option value="<?php echo $opc['cod'];?>"selected><?php echo $opc['nombre_corto'] ?></option>
                <?php
                }else{
                ?>
                    <option value="<?php echo $opc['cod'];?>"><?php echo $opc['nombre_corto'] ?></option>
                <?php
                }
                }
            ?>
        </select>
        <?php
        $consulta2 = "SELECT cod, nombre FROM tienda";
        $ejec2 = mysqli_query($conexion, $consulta2);
        if (!$ejec2) {
            echo "Hay un error: " . $sql . "<br>" . mysqli_error($coexion);
        }
        ?>
       
        <select name="selectt2">
            <?php
            foreach ($ejec2 as $opc2) {
            ?>
            <option value="<?php echo $opc2['nombre'];?>"></option>
            <?php
            }
            ?>
        </select>

     
        <br><input type="number" name="uds1">Cantidad
        <br><input type="submit" value="enviar">
    </form>
    <?php 
    //$consulta = "SELECT producto, tienda, unidades FROM stock WHERE producto= '" . $_POST['selectt'] . "'";

    $consulta = "UPDATE STOCK SET UNIDADES WHERE PRODUCTO = '".$_POST['selectt']."' and TIENDA = '".$_POST['selectt2']."'";
    $ejec = mysqli_query($conexion, $consulta);
    if (mysqli_query($conexion, $consulta)){
        echo "OK";
    }else{
        echo "Hay un error: " . $sql . "<br>" . mysqli_error($conexion);
    }
    mysqli_close($conexion);
    ?>
</body>

</html>

<!--Aparece un campo de texto con las unidades, se modifican esas unidades y se actualiza la tabla-->