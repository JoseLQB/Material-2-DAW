<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<form action="ejer18.php" method="post" name="ejer18">
<input type ="text" name="numero">Numero<br><br>
<input type="submit" value="Calcular Binario">

<?php
    include "ejer1.php";
    $numero= $_POST["numero"];
    echo "<br>". binario($numero);
?>  
</body>
</html>