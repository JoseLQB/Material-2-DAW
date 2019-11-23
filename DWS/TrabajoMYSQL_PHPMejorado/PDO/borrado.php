<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
    if($_POST["el"]=="Eliminar"){
        
      
        $cod = $_POST["cod"];

        include("conexionPDO.php");
        //Para la actualización de la tabla hago una consulta preparada
        try {
            $conexion=$base->prepare("DELETE FROM producto WHERE producto.cod = ':COD';
            "); 
            $rows = $conexion->execute(array(':cod' =>$cod));
            if( $rows > 0 ){
            echo '<center><h1><font color="green">¡Elemento borrado!</font></h1></center><br>';
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
    }else if($_POST["el"]=="Cancelar"){
        header("Location: listado.php");
    }
    
    ?>
</body>
</html>