<!--Tabla entera, el mayor verde, el menor rojo-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php 
    $host = "localhost";
    $usuario = "root";
    $pass = "";
    $bdd = "dwes";
    $conexion = new mysqli($host, $usuario, $pass, $bdd);
    if($conexion->connect_errno){
        echo "Hay un error: (" . $conexion->connect_errno . ") " . $conexion->connect_error;  
    }
    $sql = "SELECT nombre_corto, PVP from producto order by nombre_corto desc";
    $resultado = $conexion->query($sql);
    if(!$resultado){
        printf("Hay un error ", $conexion->error);
    }
    if($resultado->num_rows>0){
        $mayor = 0;
        $menor = 1000;
        while($row = $resultado->fetch_assoc()){
            if($row["PVP"]>$mayor){
                $mayor=$row["PVP"];
            }
            if($row["PVP"]<$menor){
                $menor=$row["PVP"];
            }
        }
    }
    $sql = "SELECT nombre_corto, PVP from producto order by nombre_corto desc";
    $resultado = $conexion->query($sql);
    if(!$resultado){
        printf("Hay un error ", $conexion->error);
    }
    if($resultado->num_rows>0){
        while($row = $resultado->fetch_assoc()){
            
            if($row["PVP"]==$mayor){
                $row["PVP"] = "<font color='green'>".$row["PVP"]."</font>";
                $row["nombre_corto"] = "<font color='green'>".$row["nombre_corto"]."</font>";
            }
            if($row["PVP"]==$menor){
                $row["PVP"] = "<font color='red'>".$row["PVP"]."</font>";
                $row["nombre_corto"] = "<font color='red'>".$row["nombre_corto"]."</font>";

            }
            echo $row["nombre_corto"] . " ||| Precio => " . $row["PVP"]. "€<hr>";
        }
    }
    ?>
</body>
</html>