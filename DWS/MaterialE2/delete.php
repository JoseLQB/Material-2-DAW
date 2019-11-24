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
    }$sql = "DELETE FROM producto WHERE cod = 'EEEPC1005PXD'";
    if($conexion->query($sql)==TRUE){
        echo "ELIMINADO";
    }else{
        echo "error: " .$conexion->error;
    }
    $conexion->close();
    ?>
    
</body>
</html>