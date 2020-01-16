<?php 
	require_once('DB.php');
	require_once('Usuario.php');
	
	class UsuarioDB{

		public function __construct(){}

		//inserta los datos del usuario
		public function insertar($usuario){
			$db=DB::conectar();
			$insert=$db->prepare('INSERT INTO usuario VALUES(NULL,:usuario, :pwd, :email, :rol)');
			$insert->bindValue('usuario',$usuario->getUsuario());
			$pass=($usuario->getPwd());
			$insert->bindValue('pwd',$pass);
			$insert->bindValue('email',$usuario->getEmail());
			$insert->bindValue('rol',$usuario->getRol());
			$insert->execute();
		}

		//obtiene el usuario para el login
		public function obtenerUsuario($usuario, $pwd){
			$db=Db::conectar();
			$select=$db->prepare('SELECT * FROM usuario WHERE usuario=:usuario');//AND pwd=:pwd
			$select->bindValue('usuario',$usuario);
			$select->execute();
			$registro=$select->fetch();
			$usuario=new Usuario();
			//verifica si la pwd es conrrecta
			if (password_verify($pwd, $registro['pwd'])) {				
				//si es correcta, asigna los valores que trae desde la base de datos
				$usuario->setId($registro['id']);
				$usuario->setUsuario($registro['usuario']);
				$usuario->setPwd($registro['pwd']);
			}			
			return $usuario;
		}

		//busca el usuario del usuario si existe
		public function buscarUsuario($usuario){
			$db=Db::conectar();
			$select=$db->prepare('SELECT * FROM usuario WHERE usuario=:usuario');
			$select->bindValue('usuario',$usuario);
			$select->execute();
			$registro=$select->fetch();
			if($registro['Id']!=NULL){
				$usado=False;
			}else{
				$usado=True;
			}	
			return $usado;
		}
	}
?>