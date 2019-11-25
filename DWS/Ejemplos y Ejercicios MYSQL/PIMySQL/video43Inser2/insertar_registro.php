<?php

//$busqueda = $_GET["buscar"];
$cod = $_GET["c_art"];
$nombre = $_GET["nombre"];
$desc = $_GET["desc"];
$precio = $_GET["pvp"];
$familia = $_GET["fam"];

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

$consulta = "INSERT INTO PRODUCTO (cod, nombre_corto, descripcion, pvp, familia) 
VALUES ('$cod', '$nombre', '$desc', '$precio', '$familia')";

$resultados=mysqli_query($conexion, $consulta); //se crea una tabla en memoria con la info de la sentencia SQL

if (!$resultados){
    echo "Hay un error: " . $sql . "<br>" . mysqli_error($conexion);
}else{
    echo "Registro introducido";
    echo "<table><tr><td>$cod</td></tr>";
    echo "<tr><td>$nombre</td></tr>";
    echo "<tr><td>$desc</td></tr>";
    echo "<tr><td>$precio</td></tr>";
    echo "<tr><td>$familia</td></tr>";
}
mysqli_close($conexion);


?>