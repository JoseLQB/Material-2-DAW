<?php

    $busqueda = $_GET["buscar"];

    $db_host = "localhost";
    $db_nombre="dwes";
    $db_usuario = "root";
    $db_pass="";

    $conexion= mysqli_connect($db_host, $db_usuario, $db_contra, $db_nombre);

    if(mysqli_connect_errno()){
        echo "Fallo al conectar" ;
        exit();
    }
    mysqli_select_db($conexion, $db_nombre) or die("No se encuentra la BBDD");
    mysqli_set_charset($conexion, "utf8");

    $consulta = "select * from producto where nombre_corto like '%$busqueda%'";

    $resultados=mysqli_query($conexion, $consulta); //se crea una tabla en memoria con la info de la sentencia SQL

    while($fila=mysqli_fetch_array($resultados, MYSQLI_ASSOC)){
        echo "<table border='2'><tr><td>";
        echo $fila["cod"] . "</td><td>";
        echo $fila["nombre_corto"] . "</td><td>";
        echo $fila["descripcion"] . "</td><td>";
        echo $fila["PVP"] . "</td><td>";
        echo $fila["familia"] . "</td><td></tr></table>";
    }

    echo "<br>";
    echo "<br>";

    mysqli_close($conexion);

?>