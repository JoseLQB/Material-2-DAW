<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
    //Insercción de datos
        // Conexión
        $conn = mysqli_connect("127.0.0.1", "root", "", "dwes");
        // Comprueba conexión
        if (!$conn) {
            die("La conexión ha fallado" . mysqli_connect_error());
        }
        
        echo "Conexión realizada con éxito";
        $cod = "RAT";
        $nombre = "Ratones";
        
        $sql = "INSERT INTO familia(cod, nombre) VALUES ('$cod', '$nombre')";
        if (mysqli_query($conn, $sql)) {
            echo "<br>Datos agregados";
        } else {
            echo "Hay un error: " . $sql . "<br>" . mysqli_error($conn);
        }
        mysqli_close($conn);
    
    ?>
    
</body>
</html>