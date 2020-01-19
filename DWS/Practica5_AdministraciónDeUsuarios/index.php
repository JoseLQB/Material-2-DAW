<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <h2 align="center">Introduce tus datos para acceder a la aplicación</h2>
    <form action="controller/controllerLogin.php" method="post">
        <table table width="2%" border="2" align="center">
            <tr>
                <td>
                <label>Usuario</label></td>
                <td><input type="text" name="usuario"  required></td>
            </tr>
            <tr>
                <td><label>Password</label></td>
                <td><input type="password" name="pwd" required></td>
            </tr>
        </table>
		<br>
		<center><input type="submit" name="acceder" value="Acceder" ></center>
	</form>
</body>
</html>