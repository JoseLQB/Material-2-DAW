<?php
    try{
        $conn= new PDO("mysql:host=localhost; dbname=Practica5", "root", "");
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $conn->exec("SET CHARACTER SET UTF8");
        // echo "ok"; 
    }catch(Exception $e){
        die("Error" . $e->getMessage());
        echo "Linea del error" . $e->getLine();
    }

    if(isset($_POST["login"])){

        try{

            $sql="SELECT * FROM usuario WHERE usuario = :usuario AND pwd= :pass ";
            $resultado = $conn->prepare($sql);
            $login = $_POST["user"];
            $sql2="SELECT rol FROM usuario WHERE usuario = '$login'";
            $cRol = $conn->query($sql2);
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
            if($nr!=0){
                session_start();
                $_SESSION["usuario"]=$_POST["user"];
                if($rol == "admin"){
                    header("Location:viewAdmin.php");
                }else{
                    header("Location:viewNormal.php");
                }
            }else{
               ?> <br><p class="warning">Error, usuario o contraseña incorrectos</p>
            <?php
        }
        }catch(Exception $e){
            die("Error" . $e->getMessage());
            echo "Linea del error" . $e->getLine();
        }
    }

?>