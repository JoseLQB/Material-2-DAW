<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="../styles/styles.css">
</head>
<body>
    <h1>ACTUALIZAR</h1>

    <?php
        $nom = $_POST["aoc"];
        $cod = $_POST["boc"];
        $des = $_POST["coc"];
        $pre = $_POST["doc"];
    ?>
    
    <p>&nbsp;</p>
    <form action="actualizar.php" method="post">
    <table width="25%" border="0" align="center">
        <tr>
            <td>Nombre</td>
            <td><input type="text" name="nc" id="" value="<?php echo $nom ?>"></td>
        </tr>
        <tr>
            <td>Codigo</td>
            <td><input type="hidden" name="cod" id="" value="<?php echo $cod ?>"><?php echo $cod ?></td>
        </tr>
        <tr>
            <td>Descripcion</td>
            <td><textarea rows="10" cols="60" name="desc" id=""><?php echo $des ?></textarea></td>
            
        </tr>
        <tr>
            <td>Precio</td>
            <td><input type="text" name="pvvp" id="" value="<?php echo $pre ?>"></td>
        </tr>
        <tr>
            <td></td>
            <td><center><input type="submit" name="su" id="" value="Actualizar">&nbsp &nbsp &nbsp
            &nbsp &nbsp <input type="submit" name="su" id="" value="Cancelar"></center>
            </td>
            <td></td>
        </tr>
    </table>
    </form>
    <?php
    
    
    ?>
</body>
</html>