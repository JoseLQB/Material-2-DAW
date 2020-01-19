<?php 

    class UsuarioDb{
        private $db; //conexion
        private $usuario;

        public function __construct(){
            require_once("Db.php");
            $this->db=Db::conectar();//se llama al método conexion de la clase conectar
            $this->usuario=array();
        }
        //Devuelve todos los usuarios en un array
        public function getUsuario(){
            $consulta=$this->db->query("SELECT * FROM usuario");

            while($filas=$consulta->fetch(PDO::FETCH_ASSOC)){
                $this->usuario[]=$filas;
            }
            return $this->usuario;
        }
        
        //Da de alta a un nuevo usuario
        public function nuevoUsuario($id, $usuario,  $email, $rol, $pwd){
            $sql = "INSERT INTO usuario(id, usuario, email, rol, pwd) VALUES(:id, :usuario, :email, :rol, :pwd)";
            $sentencia = $this->db->prepare($sql);
            $sentencia->bindParam(':id', $id);
            $sentencia->bindParam(':usuario', $usuario);
            $sentencia->bindParam(':email', $email);
            $sentencia->bindParam(':rol', $rol);
            $sentencia->bindParam(':pwd', $pwd);
            $sentencia->execute();
        }
        //Elimina a un usuario a partir de su id
        public function delete($id, $usuario, $pwd, $email, $rol){
            $sql = "DELETE FROM usuario WHERE id =  :id";
            $sentencia = $this->db->prepare($sql);
            $sentencia->bindParam(':id', $id);
            $sentencia->execute();
        }
        //Modifica a un usuario pasándole a la función los nuevos datos
        public function update($id, $usuario, $email, $rol, $pwd){
            $sql = "UPDATE usuario SET 
                    usuario = :usuario,
                    email = :email,
                    pwd = :pwd, 
                    rol = :rol WHERE id = $id";
            $sentencia = $this->db->prepare($sql);
            $sentencia->bindParam(":usuario", $usuario);
            $sentencia->bindParam(":email", $email);
            $sentencia->bindParam(":pwd", $pwd);
            $sentencia->bindParam(":rol", $rol);
            $sentencia->execute();
            
        }

    }

?>