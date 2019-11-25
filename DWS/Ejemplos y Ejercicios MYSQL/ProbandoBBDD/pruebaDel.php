<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php 
/*insercción de datos*/
    $conn = mysqli_connect("127.0.0.1", "root", "", "dwes");
    // Comprueba conexión
    if (!$conn) {
        die("La conexión ha fallado" . mysqli_connect_error());
    }

    echo "Conexión realizada con éxito";
    $sql = "DELETE FROM 'familia' WHERE 'nombre' = 'Coche'";
    if (mysqli_query($conn, $sql)) {
        echo "<br>Dato eliminado";
    } else {
        echo "Hay un error: " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
?>
</body>
</html>