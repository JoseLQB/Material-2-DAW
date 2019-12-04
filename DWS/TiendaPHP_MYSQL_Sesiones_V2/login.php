<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="styles/styles.css">
</head>
<body>

    <h1>Introduce tus datos para entrar en la tienda</h1>
    <div id="regis">
    <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
    <table class="table"> 
        <tr>
            <td>Usuario &nbsp; &nbsp;</td>
            <td><input type="text" name="usuario" id="" required></td>
        </tr>
        <tr>
            <td>Contraseña &nbsp; &nbsp;</td>
            <td><input type="password" name="pass" id="" required></td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" name="login" value="LOGIN"></td>
        </tr>
        <tr>
            <td colspan="2"><a href="registro.php">Pulsa aquí si no tienes cuenta en la tienda</a></td>
        </tr>
    </table>
    
    
    </form>
    </div>
    </form>
    </div>
    <?php 
    
    if(isset($_POST["login"])){
        //include("conexion.php");
        include("funciones.php");
        $conn =conexionPDO("localhost", "dwes", "root", "");
        try{

            $sql="SELECT * FROM USUARIOS WHERE USUARIOS = :usuarios AND PASS= :pass";
            $resultado = $conn->prepare($sql);
            $login = $_POST["usuario"];
            $pass =$_POST["pass"];
            $pass =$pass;
            $resultado->bindValue(":usuarios", $login);
            $resultado->bindValue(":pass", $pass);
            $resultado->execute();
            $nr = $resultado->rowCount(); //devuelve 0 o 1
            if($nr!=0){
                $_SESSION["usuario"]=$_POST["usuario"];
                header("Location:productos.php");
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

</body>
</html>