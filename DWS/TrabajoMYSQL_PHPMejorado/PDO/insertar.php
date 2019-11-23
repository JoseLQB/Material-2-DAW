<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="../styles/styles.css">
</head>
<body>
    <?php 
    if(isset($_POST["insertar"])){
    
        include("conexionPDO.php");
        //Consulta que irá en el desplegable inicial
        $conexion=$base->query("SELECT f.nombre, f.cod FROM familia f"); //resulset
        $registros=$conexion->fetchAll(PDO::FETCH_OBJ);
        
        $icod
    
        ?>
        <h2>Formulario de Inserción</h2>
        <table>
            <form action="insercion.php" method="post">
                <tr>
                    <td>Nombre de producto</td>
                    <td><input type="text" name="inom" id=""></td>
                </tr>
                <tr>
                    <td>Codigo de producto</td>
                    <td><input type="text" name="icod" id=""></td>
                </tr>
                <tr>
                     <td>Descripción</td>
                     <td><textarea rows="10" cols="60" name="idesc" id=""></textarea></td>
                </tr>
                <tr>
                     <td>Precio</td>
                     <td><input type="text" name="iprec" id=""></td>
                </tr>
                <tr>
                     <td>Familia</td>
                     <td><select name="ifamilia" id="">
                         <?php
                             foreach ($registros as $k){
                             ?>
                             <option value="<?php echo $k->cod;?>">
                             <?php echo $k->nombre;?>
                             </option>
                             <?php
                             }
                         ?>
                     </select></td>
                </tr>
                <tr>
                     <td>¿Insertar?</td>
                     <td><input type="submit" name="in" value="INSERTAR DATOS">
                     <input type="submit" name="in" value="CANCELAR"><br></td>
                </tr>
            </form>
        </table>
    <?php
    }
    ?>
</body>
</html>