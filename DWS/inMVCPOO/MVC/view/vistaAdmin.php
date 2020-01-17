<?php 
	/*session_start();
	if (!isset($_SESSION['usuario'])) {
		header('Location: ../index.php');
	}*/
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
    <meta charset="UTF-8">
</head>
<body>
<header>
	<div>
		<h1>Agrega a un usuario nuevo</h1>
	</div>
</header>
    <div>
        <form action="controllerLogin.php" method="post">
        <table>
            <tr>
                <td><label>Nombre de usuario</label></td>
                <td><input type="text" name="usuario"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
            </tr>
        </table>
            <p>
                
                
            </p>
            <p>
                <label>Password</label>
                <input type="password" name="pwd">
            </p>
            <p>
                <label>Email</label>
                <input type="text" name="email">
            </p>
            <p>
                <label>Rol de usuario</label>
                <input type="text" name="rol">
            </p>
            <p>
                <input type="hidden" name="registrarse" value="registrarse">
                <button>Registrarse</button>
            </p>
            <p><a href="../index.php">Atrás</a></p>
        </form>
    </div>

</body>
</html>