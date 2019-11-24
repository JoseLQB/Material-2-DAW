<!--Nuestra los productos ordenados alfabeticamente-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="letra" id="letra">
        <input type="submit" value="MOSTRAR" name="most">
    </form>
    <?php 
    $letra = $_POST["letra"];
    $busc = $letra . "%";

    if(isset($_POST["most"])){
        $host = "localhost";
        $ususario = "root";
        $pass = "";
        $bdd = "dwes";
        $conexion = new mysqli($host, $ususario, $pass, $bdd);
        if ($conexion->connect_errno) {
            echo "Fallo al conectar a MySQL: (" . $conexion->connect_errno . ") " . $conexion->connect_error;
        }
        $sql = "SELECT nombre_corto FROM producto WHERE nombre_corto like '$busc'";
        //$sql = "SELECT nombre_corto from producto order by nombre_corto desc";
        $resultado = $conexion->query($sql);
        if(!$resultado){
            printf("Hay un error ", $conexion->error);
        }
        if($resultado->num_rows>0){
            ?>
            <h1>
                <!--Productos ordenados de manera descendente-->
                Productos que empiezan por  <?php echo " " . $letra?>
            </h1>
            <?php
            while($row = $resultado->fetch_assoc()){
                ?>
                <ul>
                    <li><?php echo $row['nombre_corto']?></li>
                </ul>
                <?php
            }
        }else{
            echo "<h1>No hay resultados para " . $letra . "</h1>";
        }
        $conexion->close();
    }
    
    ?>
    
</body>
</html>