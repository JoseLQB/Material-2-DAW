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
    $sql = "ALTER TABLE FAMILIA ADD COLUMN PRECIO INT(2)";
    if (mysqli_query($conn, $sql)) {
        echo "<br>Columna añadida";
    } else {
        echo "Hay un error: " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
?>
</body>
</html>