<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
    if($_POST["su"]=="Actualizar"){
        
        $modNombre = $_POST["nc"];
        $modCodigo = $_POST["cod"];
        $modDescri = $_POST["desc"];
        $modPrecio = $_POST["pvvp"];

        include("conexionPDO.php");
        //Para la actualización de la tabla hago una consulta preparada
        try {
            $conexion=$base->prepare("UPDATE producto SET nombre_corto = :nombre_corto, 
                                        descripcion = :descripcion, PVP = :PVP
                                        WHERE producto.cod = :cod;"); 
            $rows = $conexion->execute(array(':nombre_corto' =>$modNombre,
                                                ':descripcion' =>$modDescri,
                                                ':PVP' =>$modPrecio,
                                                ':cod' =>$modCodigo));
            if( $rows > 0 ){
            echo '<center><h1><font color="green">¡Actualización correcta!</font></h1></center><br>';
            ?>
            <form action="listado.php" method="post">
                <center><input type="submit" value="Continuar"></center>
            </form>
            <?php
            }
        } catch(PDOException $e) {
            echo 'Error: ' . $e->getMessage();
        }
        
       //Si hemos pulsado cancelar se nos redirigirá al listado inicial
    }else if($_POST["su"]=="Cancelar"){
        header("Location: listado.php");
    }
    
    ?>
</body>
</html>