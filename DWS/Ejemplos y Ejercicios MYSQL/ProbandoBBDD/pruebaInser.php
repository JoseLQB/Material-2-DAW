<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php 
/*insercción de datos*/
    $conexion = mysqli_connect('127.0.0.1', 'root', '', 'dwes');
    if ($mysqli->connect_errno) {
        echo "Lo sentimos, este sitio web está experimentando problemas.";
        }else{
            $nombre = "Coches";
            $cd = "CCH";          
            mysqli_query($conexion, "INSERT INTO familia(cod, nombre) VALUES ('$cod', '$nombre')");
            mysqli_close($conexion); 
        }
?>
</body>
</html>

<!--$connection->query("INSERT INTO familia(cod, nombre) VALUES ('CCH', 'Coches')");
$mysql->query("INSERT INTO familia(cod, nombre) VALUES ('CCH', 'Coches')") or
      die($mysql->error);-->