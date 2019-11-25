<!--Primeras consultas con funciones y manejo de errores-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
    $db_host = "localhost";
    $db_nombre="dwes";
    $db_usuario = "root";
    $db_pass="";

    $conexion= mysqli_connect($db_host, $db_usuario, $db_contra, $db_nombre);

    if(mysqli_connect_errno()){
        echo "Fallo al conectar" ;
        exit();
    }
    mysqli_select_db($conexion, $db_nombre) or die("No se encuentra la BBDD");//Si conecta pero no encuentra la bbdd
    mysqli_set_charset($conexion, "utf8");//para que coja caracteres latinos

    $consulta = "select * from producto where familia like '%a'";

    $resultados=mysqli_query($conexion, $consulta); //se crea una tabla en memoria con la info de la sentencia SQL

    while($fila=mysqli_fetch_row($resultados)){
        for($i=0; $i<=sizeof($fila); $i++){
            echo $fila[$i] . "<br>";
        }
        echo "<hr>";
    }

    mysqli_close($conexion);

    ?>
</body>
</html>