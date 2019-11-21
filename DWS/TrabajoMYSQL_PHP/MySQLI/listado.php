<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="../styles/styles.css">
</head>
<body>
    <?php 
    
    include("conexionMYSQLI.php");
    $sql = "SELECT f.nombre, f.cod FROM familia f";
    $resultado = $base->query($sql);
    if (!$resultado) {
        printf("Hay un error en la consulta: %s\n", $base->error);
    }
    if($resultado->num_rows>0){
    
    ?>
    <h2>Selecciona Familia</h2>
    <form action="listado.php" method="post">
    <select name="opcion">
        
    <?php
        while($row = $resultado->fetch_assoc()){
        ?>
        <option value="<?php echo $row['cod'];?>">
        <?php echo $row['nombre'];?>
        </option>
        <?php
        }
    ?>
    <input type="submit" name="Mostrar"><br>
    </select>
    </form>
    <?php
    }
    if(isset($_POST["Mostrar"])){  
        $oculto = $_POST["opcion"];
        $sql2 = "SELECT * FROM producto  where familia = '$oculto'";
        $resultado2 = $base->query($sql2);
        if (!$resultado) {
            printf("Hay un error en la consulta: %s\n", $base->error);
        }
        ?>
        <table>
            <tr>
                <th>Producto</th>
                <th>Codigo de Producto</th>
                <th>Descripción</th>
                <th>Precio</th>
                <th></th>
            </tr>
        <?php
        if($resultado2->num_rows>0){
        while($row2 =$resultado2->fetch_assoc()){
            $a =$row2['nombre_corto'];
            $b =$row2['cod'];
            $c =$row2['descripcion'];
            $d =$row2['PVP'];
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
    }
    
    ?>
</body>
</html>