<?php 
	class Usuario{
		private $id;
		private $usuario;
		private $pwd;
		private $email;
		private $rol;

		/*	public function __construct($id, $usuario, $pwd, $email, $rol){
			$this->id=$id;
			$this->usuario=$usuario;
			$this->pwd=$pwd;
			$this->email=$email;
			$this->email=$rol;
		} */

		public function getId(){
			return $this->id;
		}

		public function setId($id){
			$this->id = $id;
		}

		public function getUsuario(){
			return $this->usuario;
		}

		public function setUsuario($usuario){
			$this->usuario = $usuario;
		}

		public function getPwd(){
			return $this->pwd;
		}

		public function setPwd($pwd){
			$this->pwd = $pwd;
		}
		public function getEmail(){
			return $this->email;
		}

		public function setEmail($email){
			$this->email = $email;
		}
		public function getRol(){
			return $this->rol;
		}

		public function setRol($rol){
			$this->rol = $rol;
		}
	}
?>