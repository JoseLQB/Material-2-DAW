<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>
        <?php 
        foreach ($data as $k) {
        ?>
        <table>
            <tr>
                <td><?php echo $k->getTitulo(); ?></td>
                <td>ID : <?php echo $k->getId(); ?></td>
            </tr>
            <tr>

            </tr>
        </table>
        <?php
        }
        ?>
    </div>
    <form action="../controller/insetController.php" method="post">
        <h3>Titulo</h3><br>
        <input type="text" name="titulo" id=""><br>
        <h3>Imagen</h3><br>
        <input type="text" name="imagen" id=""><br>
        <h3>Descripcion</h3><br>
        <input type="text" name="descripcion" id=""><br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>