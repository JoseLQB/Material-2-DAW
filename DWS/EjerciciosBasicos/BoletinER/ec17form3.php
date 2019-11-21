<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <form action="ec17form3.php" method="post" name="ej17">
        <input type="text" name="numero"/>
        <input type="submit" value="enviar"/>
    </form>

    <?php
    $numero = $_POST["numero"];
    $arr = str_split($numero);
    echo $numero . " tiene " .sizeof($arr) . " cifras.";
    ?>
</body>
</html>