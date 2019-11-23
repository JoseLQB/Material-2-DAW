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
    <form action="insertar.php" method="post">
    <tr>
        <td>¿Prefieres insertar un nuevo elemento? &nbsp;</td>
        <td><input type="submit" value="Insertar" name="insertar"></td>
    </tr>
    </form>
    <form action="listado.php" method="post">
    <tr>
        <td>También puedes ver la tabla completa &nbsp;</td>
        <td><input type="submit" value="Ver Tabla" name="ver"></td>
    </tr>
    </form>
    <form action="listado.php" method="post">
    <tr>
        <td>O eliminar un elemento  &nbsp;</td>
        <td><input type="submit" value="Eliminar" name="del"></td>
    </tr>
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
        <form action="editar.php" method="post">  
        <tr>
            <td><?php echo $a?><input type="hidden" name="aoc" value="<?php echo $a ?>"></td>
            <td><?php echo $b?><input type="hidden" name="boc" value="<?php echo $b ?>"></td>
            <td><?php echo $c?><input type="hidden" name="coc" value="<?php echo $c ?>"></td>
            <td><?php echo $d?><input type="hidden" name="doc" value="<?php echo $d ?>"></td>
            <td></td>
            <td><input type="submit" value="Actualizar" name="actu"></td> 
        </tr>
            
        <?php
        }
        ?>
        </form>
    </table>
     <?php     
    }elseif(isset($_POST["ver"])){
        $conexion3 = $base->query("SELECT * FROM producto");
        $registros3=$conexion3->fetchAll(PDO::FETCH_OBJ); ?>
        <table>
            <tr>
                <th>Producto</th>
                <th>Codigo de Producto</th>
                <th>Descripción</th>
                <th>Precio</th>
            </tr>
        <?php
        foreach ($registros3 as $k2){
            $a =$k2->nombre_corto;
            $b =$k2->cod;
            $c =$k2->descripcion;
            $d =$k2->PVP;
            //Se generará una tabla con los datos del producto escogido.
            //Los campos ocultos son los que serán envíados a editar.php para ser modificados
        ?>
        <form action="listado.php" method="post">  
        <tr>
            <td><?php echo $a?></td>
            <td><?php echo $b?></td>
            <td><?php echo $c?></td>
            <td><?php echo $d?></td>
            <td></td>
        </tr>
        
            
        <?php
        }
        ?>
        <input type="submit" value="Volver" name="vol">
        </form>
        </table>
        <?php
        }else if(isset($_POST["del"])){
            $conexion4=$base->query("SELECT * FROM producto");
            $registros4=$conexion4->fetchAll(PDO::FETCH_OBJ);
            ?>
            <table>
                <tr>
                    <th>Producto</th>
                    <th>Codigo de Producto</th>
                    <th>Descripción</th>
                    <th>Precio</th>
                </tr>
            <?php
            foreach ($registros4 as $k2){
                $a =$k2->nombre_corto;
                $b =$k2->cod;
                $c =$k2->descripcion;
                $d =$k2->PVP;
                //Se generará una tabla con los datos del producto escogido.
                //Los campos ocultos son los que serán envíados a editar.php para ser modificados
            ?>
            <form action="eliminar.php" method="post">  
            <tr>
                <td><?php echo $a?><input type="hidden" name="aoc" value="<?php echo $a ?>"></td>
                <td><?php echo $b?><input type="hidden" name="boc" value="<?php echo $b ?>"></td>
                <td><?php echo $c?><input type="hidden" name="coc" value="<?php echo $c ?>"></td>
                <td><?php echo $d?><input type="hidden" name="doc" value="<?php echo $d ?>"></td>
                <td></td>
                <td><input type="submit" value="Borrar" name="borr"></td> 
            </tr>
            </form>
            <?php
            }
            ?>
            
        </table>
         <?php     
       


        }
        
        ?>
    
</body>
</html>