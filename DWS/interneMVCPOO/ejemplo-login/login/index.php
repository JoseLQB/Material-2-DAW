<?php 
	session_start();
	unset($_SESSION['usuario']);
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
    <meta charset="UTF-8">
</head>
<body>
<header>
	<div class="tit">
		<h1>Practica 5</h1>
	</div>
</header>

	
	<div class="login">
		<h2>Login</h2>
	</div>

	<form action="controller_login.php" method="post">
		<p>
			<label>Usuario</label>
			<input type="text" name="usuario">
		</p>
		<p>
			<label>Password</label>
			<input type="password" name="pas">
		</p>
		<p>
			<input type="hidden" name="entrar" value="entrar">
			<button>Aceptar</button>
		</p>
		<p>Si aún no tienes cuenta ve al siguiente link <a href="registrarse.php">Registrarse</a></p>
	</form>
</body>
</html>