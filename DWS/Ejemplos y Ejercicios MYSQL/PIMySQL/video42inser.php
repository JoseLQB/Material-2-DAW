<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php

        //$busqueda = $_GET["buscar"];

        $db_host = "localhost";
        $db_nombre="dwes";
        $db_usuario = "root";
        $db_pass="";

        $conexion= mysqli_connect($db_host, $db_usuario, $db_pass, $db_nombre);

        if(mysqli_connect_errno()){
            echo "Fallo al conectar" ;
            exit();
        }
        mysqli_select_db($conexion, $db_nombre) or die("No se encuentra la BBDD");
        mysqli_set_charset($conexion, "utf8");

        $consulta = "INSERT INTO PRODUCTO (cod, nombre_corto, descripcion, pvp, familia) VALUES ('XBOss4', 'XBOX 360', 'xbox, xbox, 360', '199', 'CONSOL')";

        $resultados=mysqli_query($conexion, $consulta); //se crea una tabla en memoria con la info de la sentencia SQL

        if (mysqli_query($conexion, $consulta)){
            echo "OK";
        }else{
            echo "Hay un error: " . $sql . "<br>" . mysqli_error($conexion);
        }
        mysqli_close($conexion);
    
    
    ?>
    
</body>
</html>