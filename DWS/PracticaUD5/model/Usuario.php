<?php 

class Usuario{
    /*private $nombre;
    private $pass;
    private $email;
    private $rol;

    function __construct($nombre, $pass, $email, $rol){
        $thisNombre->setNombre($nombre);
        $thisPass->setNombre($pass);
        $thisEmail->setNombre($email);
        $thisRol->setNombre($rol);
    }*/
    
    function conectaUsuarios(){
        require_once("model/Conexion.php");
        $this->db=Conectar::conexion();
        $this->usuario=array();
    }

    public function getUsuario(){//Devuelve todos los usuario en un array
        $consulta=$this->db->query("SELECT * FROM usuario");

        while($filas=$consulta->fetch(PDO::FETCH_ASSOC)){
            $this->usuario[]=$filas;
        }
        return $this->usuario;
    }

    public function insertaUsuario(){//insertar ususario
        try {
            $sql = "INSERT INTO usuario (id, usuario, pwd, email, rol) VALUES (NULL, :US, :PAS, :EM. :RL)";
            $sql2 = "SELECT USUARIO FROM usuario";
            $result2 = $conn->query($sql2);
            $regs=$result2->fetchAll(PDO::FETCH_OBJ);
            $ok = true;
            foreach ($regs as $k){
                if($k->USUARIOS == $usuario){
                    $ok = false;
                }
            }
            if($ok == true){
                $result = $conn->prepare($sql);
                $rows = $result->execute(array(":US"=>$usuario,
                                                ":PAS"=>$pass,
                                                ":EM"=>$email,
                                                ":RL"=>$rol));
                if($rows>0){
                    echo '<center><h3><font color="green">¡Usuario Registrado!</font></h3></center><br>';
                    
                }
            }else{
                echo "<font color='red'>El usuario ya existe</font>";
            }
        }catch (PDOException $e) {
            echo 'Error: ' . $e->getMessage();
        }

    }
}



?>