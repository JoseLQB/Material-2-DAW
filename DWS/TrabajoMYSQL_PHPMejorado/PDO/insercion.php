<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php 

    if($_POST["in"]=="INSERTAR DATOS"){
        $icod = $_POST["icod"];
        $inom = $_POST["inom"];
        $nombre = null;
        $idesc = $_POST["idesc"];
        $iprec = $_POST["iprec"];
        $ifamilia = $_POST["ifamilia"];

        include("conexionPDO.php");

        try {
            $conexion=$base->prepare("INSERT INTO PRODUCTO (cod, nombre, nombre_corto, descripcion,
                                    PVP, familia) VALUES (:ICOD, :NOMBRE, :INOM, :IDESC, :PVP, :FAMILIA)");
            $rows = $conexion->execute(array(":ICOD"=>$icod,
                                                ":NOMBRE"=>$nombre,
                                                ":INOM"=>$inom,
                                                ":IDESC"=>$idesc,
                                                ":PVP"=>$iprec,
                                                ":FAMILIA"=>$ifamilia));
            if($rows>0){
                echo '<center><h1><font color="green">¡Insercción Realizada!</font></h1></center><br>';
                ?>
                <form action="listado.php" method="post">
                    <center><input type="submit" value="Continuar"></center>
                </form>
                <?php
            }

        } catch (PDOException $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }else if($_POST["in"]=="CANCELAR"){
        header("Location: listado.php");
    }
    
    ?>
</body>
</html>