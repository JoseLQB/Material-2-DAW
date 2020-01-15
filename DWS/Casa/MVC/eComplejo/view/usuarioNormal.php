<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        td{
            border:2px dotted darkblue;
        }
    </style>
</head>
<body>
<table>

        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
        <table width="50%" border="0" align="center">
            <tr>
                <td>ID</td>
                <td>Nombre de Usuario</td>
                <td>Email</td>
                <td>Rol</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
            </tr>
            <?php 
            foreach($arrayPersonas as $persona){
                if($_POST["usuario"] == $persona["usuario"]){
                ?>
                    <tr>
                        <td><?php echo $persona["id"] ?></td>  <!--echo $persona->id -->
                        <td><?php echo $persona["usuario"] ?></td>
                        <td><?php echo $persona["email"] ?></td>
                        <td><?php echo $persona["rol"] ?></td>
                        <td><a href="borrar.php?id=<?php echo $persona["id"]?>"><input type="button" name="del" value="Borrar"></a></td>
                        <td><a href="editar.php?id=<?php echo $persona["id"]?>"><input type="button" name="up" value="Actualizar"></a></td>
                    </tr>

                <?php
                }
            }
            
            ?>
            <tr>
                <td></td>
                <td><input type="text" name="Nom" size="10" id=""></td>
                <td><input type="text" name="Ema" size="10" id=""></td>
                <td><input type="text" name="Rol" size="10" id=""></td>
                <td><input type="submit" value="Insertar"></td>
            </tr>
        </table>
        </form>
    </tr>
</table>
</body>
</html>