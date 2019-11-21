<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="../styles/styles.css">
</head>
<body>
    <?php
    if($_POST["su"]=="Actualizar"){
        
        $modNombre = $_POST["nc"];
        $modCodigo = $_POST["cod"];
        $modDescri = $_POST["desc"];
        $modPrecio = $_POST["pvvp"];

        include("conexionMYSQLI.php");
        $sql = $base->prepare("UPDATE producto SET nombre_corto = ?, 
                                    descripcion = ?, PVP = ?
                                    WHERE producto.cod = ?");
        if(!$sql){
            echo "Falló la preparación: (" . $base->errno . ") " . $base->error;
        }
        
        $sql->bind_param("ssis", $modNombre, $modDescri, $modPrecio, $modCodigo);
        if(!$sql->bind_param("ssis", $modNombre, $modDescri, $modPrecio, $modCodigo)){
            echo "Falló la vinculación de parámetros: (" . $sql->errno . ") " . $sql->error;
        }
        $sql->execute();
        
        echo '<center><h1><font color="green">¡Actualización correcta!</font></h1></center><br>';
        ?>
        <form action="listado.php" method="post">
            <center><input type="submit" value="Continuar"></center>
        </form>
        <?php
        
       
       // $registros=$conexion->fetchAll(PDO::FETCH_OBJ); 
    }else if($_POST["su"]=="Cancelar"){
        header("Location: listado.php");
    }
    
    ?>
</body>
</html>