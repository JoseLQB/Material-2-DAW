<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title> 
    <link rel="stylesheet" href="styles/styles.css">
    <link href="https://fonts.googleapis.com/css?family=Noto+Serif&display=swap" rel="stylesheet">
</head>
<body>
    <div class="content">
        <h3 align="center">Panel de administrador</h3>
        <table width="50%" border="2" align="center">
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Correo</th>
                <th>Rol</th>
                <th>Contraseña</th>
            </tr>
            <?php 
                foreach($arrayUsuario as $reg){
                    echo "<form action='../controller/controllerUpDel.php' method='post'><tr><td>" .$reg["id"]."</td><td>" 
                    .$reg["usuario"]."</td><td>" .$reg["email"]."</td><td>" .$reg["rol"]."</td><td>" 
                    .$reg["pwd"];
                    ?>
                    <input type="hidden" name="id" value='<?php echo $reg["id"]?>'>
                    <input type="hidden" name="us" value='<?php echo $reg["usuario"]?>'>
                    <input type="hidden" name="em" value='<?php echo $reg["email"]?>'>
                    <input type="hidden" name="ro" value='<?php echo $reg["rol"]?>'>
                    <input type="hidden" name="pw" value='<?php echo $reg["pwd"]?>'>
                    </td> <!--<td><input type='submit' name='edit' value='editar'>--></td>
                    <td><input type='submit' name='del' value='eliminar'></td></tr>
                    <?php
                    echo "</form>";
                }
            ?>
            <tr>
                <form action="../controller/controllerUpdate.php" method="post">
                    <td><input type="hidden" name="id" id="" required></td>
                    <td><input type="text" name="nombre" id="" required></td>
                    <td><input type="text" name="correo" id="" required></td>
                    <td><input type="text" name="rpg" id="" required></td>
                    <td><input type="text" name="contraseña" id="" required></td>
                    <td colspan="2"><input type="submit" value="Nuevo Usuario"></td>
                </form>
            </tr>

            
            
        </table>
        <br><hr><hr><br>
        <h4 align="center">Para editar a un usuario de la tabla, introduce su <b>ID<b> y a continuación sus nuevos datos</h4>
        <table width="50%" border="2" align="center">
            <tr><th>ID</th><th>Nombre</th><th>Correo</th><th>Rol</th><th>Contraseña</th></tr><tr>

                <form action='../controller/controllerUpDel.php' method='post'>
                    <td><input type="number" name="id" id=""  required></td>
                    <td><input type="text" name="nombre" id="" required></td>
                    <td><input type="text" name="correo" id="" required></td>
                    <td><input type="text" name="rol" id="" required></td>
                    <td><input type="text" name="pwd" id="" required></td>
                    <td colspan="2"><input type="submit" name="edit" value="Actualiza Usuario"></td>
                </form>
            </tr>
        </table>
        <br>
        <center><a href="../index.php">Salir</a></center>
    <div>
</body>
</html>