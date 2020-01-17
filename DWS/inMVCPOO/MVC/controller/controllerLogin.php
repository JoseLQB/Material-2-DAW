<?php 
	require_once('../model/UsuarioDB.php');
	require_once('../model/Usuario.php');
	require_once('../model/Db.php');

	//inicio de sesion
	session_start();

	$usuario=new Usuario();
	$usuarioDB=new UsuarioDB();
	//verifica si la variable registrarse está definida
	//se da que está definicda cuando el usuario se loguea, ya que la envía en la petición
	if (isset($_POST['registrarse'])) {
		$usuario->setUsuario($_POST['usuario']);
		$usuario->setPwd($_POST['pwd']);
		if ($usuarioDB->buscarUsuario($_POST['usuario'])) {
			$usuarioDB->insertar($usuario);
			header('Location: index.php');
		}else{
			header('Location: error.php?mensaje=El nombre de usuario ya existe');
		}		
		
	}elseif (isset($_POST['entrar'])) { //verifica si la variable entrar está definida
		$usuario=$usuarioDB->obtenerUsuario($_POST['usuario'],$_POST['pwd']);
		// si el id del objeto retornado no es null, quiere decir que encontro un registro en la base
		if ($usuario->getId()!=NULL) {
			$_SESSION['usuario']=$usuario; //si el usuario se encuentra, crea la sesión de usuario
			header('Location: vistaAdmin.php'); //envia a la página que simula la cuenta
		}else{
           // header('Location: error.php?mensaje=Tus nombre de usuario o clave son incorrectos'); // cuando los datos son incorrectos envia a la página de error
            echo "Nombre de usuario o clave incorrectos";
		}
	}elseif(isset($_POST['salir'])){ // cuando presiona el botòn salir
		header('Location: ../index.php');
		unset($_SESSION['usuario']); //destruye la sesión
	}
?>