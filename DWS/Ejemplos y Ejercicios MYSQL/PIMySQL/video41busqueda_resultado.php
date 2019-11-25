<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <?php

    function ejecuta_consulta($labusqueda){
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

        $consulta = "select * from producto where nombre_corto like '%$labusqueda%'";

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
    }

?>
</head>
<body>
    <?php
        $mibusqueda=$_GET["buscar"];
        $mipag=$_SERVER["PHP_SELF"];//indicamos la pagina del servidor a la que hay que llamar, en este caso a ella misma
        if($mibusqueda!=NULL){
            ejecuta_consulta($mibusqueda);
        }else{
            echo("<form action='" .$mipag ."'method='get'> 
            <label>Buscar: <input type ='text' name='buscar'></label>
            <input type='submit' name='enviando' value='Dale!'></form>");
//Si mi busqueda es nula muestra el formulario. Al ppio siempre se mostrará, porque no hay búsqueda

        }
    ?>
    
</body>
</html>