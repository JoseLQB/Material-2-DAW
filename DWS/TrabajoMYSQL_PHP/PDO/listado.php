<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="../styles/styles.css">
</head>
<body>
    <?php 
    
    include("conexionPDO.php");
    //Consulta que irá en el desplegable inicial
    $conexion=$base->query("SELECT f.nombre, f.cod FROM familia f"); //resulset
    $registros=$conexion->fetchAll(PDO::FETCH_OBJ);
    
    ?>
    <h2>Selecciona Familia</h2>
    <form action="listado.php" method="post">
    <select name="opcion">
    <?php
    //Se genera el desplegable con los datos de la consulta
        foreach ($registros as $k){
        ?>
        <option value="<?php echo $k->cod;?>">
        <?php echo $k->nombre;?>
        </option>
        <?php

        }
    ?>
    <input type="submit" name="Mostrar"><br>
    </select>
    </form>
    <?php
    
    if(isset($_POST["Mostrar"])){
        $oculto = $_POST["opcion"];
        $conexion2=$base->query("SELECT * FROM producto  where familia = '$oculto'");
        $registros2=$conexion2->fetchAll(PDO::FETCH_OBJ);
        ?>
        <table>
            <tr>
                <th>Producto</th>
                <th>Codigo de Producto</th>
                <th>Descripción</th>
                <th>Precio</th>
            </tr>
        <?php
        foreach ($registros2 as $k2){
            $a =$k2->nombre_corto;
            $b =$k2->cod;
            $c =$k2->descripcion;
            $d =$k2->PVP;
            //Se generará una tabla con los datos del producto escogido.
            //Los campos ocultos son los que serán envíados a editar.php para ser modificados
        ?>  
        <tr>
        <form action="editar.php" method="post">
            <td><?php echo $a?><input type="hidden" name="aoc" value="<?php echo $a ?>"></td>
            <td><?php echo $b?><input type="hidden" name="boc" value="<?php echo $b ?>"></td>
            <td><?php echo $c?><input type="hidden" name="coc" value="<?php echo $c ?>"></td>
            <td><?php echo $d?><input type="hidden" name="doc" value="<?php echo $d ?>"></td>
            <td></td>
            <td><input type="submit" value="Actualizar" name="actu"></td>
        </form>  
        </tr>   
        <?php
        }
        ?>
 </table>
     <?php   
    }
    
    ?>
</body>
</html>