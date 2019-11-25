<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <form name="form1" method="get" action="insertar_registro.php">
        <table align="center">
            <tr>
                <td>cod</td>
                <td><input type="text" name="c_art" id="c_art"></td>
            </tr>
            <tr>
                <td>Nombre Corto</td>
                <td><input type="text" name="nombre" id="nombre"></td>
            </tr>
            <tr>
                <td>Descripcion</td>
                <td><input type="text" name="desc" id="desc"></td>
            </tr>
            <tr>
                <td>PVP</td>
                <td><input type="text" name="pvp" id="pvp"></td>
            </tr>
            <tr>
                <td>Familia</td>
                <td><input type="text" name="fam" id="fam"></td>
            </tr>
            <tr>
                <td><input type="submit" value="Enviar"></td>
                <td><input type="reset" value="Borrar"></td>
                <td></td>
            </tr>

        </table>

    </form>
</body>
</html>