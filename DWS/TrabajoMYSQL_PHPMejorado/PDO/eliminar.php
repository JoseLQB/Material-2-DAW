<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="../styles/styles.css">
</head>
<body>
    <h1>Vas a eliminar el siguiente producto</h1>

    <?php
        $nom = $_POST["aoc"];
        $cod = $_POST["boc"];
        $des = $_POST["coc"];
        $pre = $_POST["doc"];
    ?>
    
    <p>&nbsp;</p>
    <form action="borrado.php" method="post">
    <table width="25%" border="0" align="center">
        <tr>
            <td>Nombre</td>
            <td><?php echo $nom ?></td>
        </tr>
        <tr>
            <td>Codigo</td>
            <td><input type="hidden" name="cod" id="" value="<?php echo $cod ?>"><?php echo $cod ?></td>
        </tr>
        <tr>
            <td>Descripcion</td>
            <td><?php echo $des ?></td>
            
        </tr>
        <tr>
            <td>Precio</td>
            <td><?php echo $pre ?></td>
        </tr>
        <tr>
            <td></td>
            <td><center><input type="submit" name="el" id="" value="Eliminar">&nbsp &nbsp &nbsp
            &nbsp &nbsp <input type="submit" name="el" id="" value="Cancelar"></center>
            </td>
            <td></td>
        </tr>
    </table>
    </form>
    <?php
    
    
    ?>
</body>
</html>