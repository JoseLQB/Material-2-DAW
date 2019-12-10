<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php 
    include("vehiculos.php");
    $renault = new Coche();
    $pegaso = new Camion();

    echo "El renault tiene ".$renault->ruedas . " ruedas.<br>";
    echo "El pegaso tiene " . $pegaso->ruedas . " ruedas.<br>";

    ?>
</body>
</html>