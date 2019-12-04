<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styles/styles.css">
    <title>Document</title>
</head>
<body>
    <h1>Introduce tus datos para registrarte en la tienda</h1>
    <div id="regis">
    <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
    <table class="table"> 
        <tr>
            <td>Nombre de usuario &nbsp; &nbsp;</td>
            <td><input type="text" name="usuario" id=""></td>
        </tr>
        <tr>
            <td>Contraseña &nbsp; &nbsp;</td>
            <td><input type="password" name="pass" id=""></td>
        </tr>
        <tr>
            <td>Repite la contraseña &nbsp; &nbsp;</td>
            <td><input type="password" name="passc" id=""></td>
        </tr>
        <tr>
            <td><input type="submit" name="regis" value="REGISTRARSE"></td>
        </form>
            <td><button><a href="login.php">Volver al login</a></button></td>
        </tr>
    </table>
    <?php 
    if(isset($_POST["regis"])&& $_POST["usuario"]!="" && $_POST["pass"]!="" && $_POST["passc"]!=""){
        $usuario = $_POST["usuario"];
        $pass = $_POST["pass"];
        $passc = $_POST["passc"];
        include("funciones.php");
        $conn =conexionPDO("localhost", "dwes", "root", "");
        if($pass == $passc){
            try {
                $sql = "INSERT INTO usuarios (ID, USUARIOS, PASS) VALUES (NULL, :US, :PAS)";
                $sql2 = "SELECT USUARIOS FROM usuarios";
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
                                                    ":PAS"=>$pass));
                    if($rows>0){
                        echo '<center><h3><font color="green">¡Usuario Registrado!</font></h3></center><br>';
                        
                    }
                }else{
                    echo "<font color='red'>El usuario ya existe</font>";
                }
            } catch (PDOException $e) {
                echo 'Error: ' . $e->getMessage();
            }
        }
    }else{
        echo "<font color='red'>Introduce todos los datos</font>";
    }
    
    ?>
    </div>
    </div>
</body>
</html>