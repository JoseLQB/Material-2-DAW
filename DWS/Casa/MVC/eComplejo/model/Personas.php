<?php 

    class Personas{
        private $db; //conexion
        private $personas;

        public function __construct(){
            require_once("../model/Conn.php");
            $this->db=Conectar::conexion();//se llama al método conexion de la clase conectar
            $this->personas=array();
        }

        public function getPersonas(){//Devuelve todos los Personas en un array
            $consulta=$this->db->query("SELECT * FROM usuario");

            while($filas=$consulta->fetch(PDO::FETCH_ASSOC)){
                $this->personas[]=$filas;

            }
            return $this->personas;
        }

        public function login(){
            $sql="SELECT * FROM usuario WHERE usuario = :usuario AND pwd= :pass ";
            $resultado = $this->db->prepare($sql);
            $login = $_POST["user"];
            $sql2="SELECT rol FROM usuario WHERE usuario = '$login'";
            $cRol = $this->db->query($sql2);
            $reg = $cRol->fetchAll(PDO::FETCH_OBJ);
            foreach($reg as $k){
                $rol = $k->rol;
            }
            $pass =($_POST["pass"]);
            //$rol = "";
            $resultado->bindValue(":usuario", $login);
            $resultado->bindValue(":pass", $pass);
            $resultado->execute();
            $nr = $resultado->rowCount(); //devuelve 0 o 1
            if($nr!=0){//comprueba si coinciden usuario y contraseña
                session_start();
                $_SESSION["usuario"]=$_POST["user"];
                if($rol == "admin"){ //comprueba el rol del usuario
                    header("Location:viewAdmin.php");
                }else{
                    header("Location:viewNormal.php");
                }
            }else{
               ?> <br><p class="warning">Error, usuario o contraseña incorrectos</p>
            <?php
            }
        }
    }

?>