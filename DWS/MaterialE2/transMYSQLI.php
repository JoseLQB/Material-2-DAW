<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php  
        $host = "localhost";
        $ususario = "root";
        $pass = "";
        $bdd = "dwes";
        $conexion = new mysqli($host, $ususario, $pass, $bdd);
        if ($conexion->connect_errno) {
            echo "Fallo al conectar a MySQL: (" . $conexion->connect_errno . ") " . $conexion->connect_error;
        } 
        $result_trans = true; //creamos la bandera
        $conexion->begin_transaction(MYSQLI_TRANS_START_READ_WRITE);
        //realizo las querys
        
        $query1 = $conexion->query("INSERT INTO PRODUCTO (cod, nombre, nombre_corto, descripcion,
        PVP, familia) VALUES ('RS2W6', 'null', 'Sega Master System', 'Hola.',
        '237', 'CONSOL')");
        $query2 = $conexion->query("INSERT INTO PRODUCTO (cod, nombre, nombre_corto, descripcion,
        PVP, familia) VALUES ('XSaq12', 'null', 'Super Nintendo', 'La favorita de Slobulus.',
        '999', 'CONSOL')");
        $query3 = $conexion->query("INSERT INTO PRODUCTO (cod, nombre, nombre_corto, descripcion,
        PVP, familia) VALUES ('RZQWS23', 'null', 'Tele 4K LG', 'Pa ver bien las cosas.',
        '444', 'TV')");
        $query4 = $conexion->query("INSERT INTO PRODUCTO (cod, nombre, nombre_corto, descripcion,
        PVP, familia) VALUES ('RZ991Q', 'null', 'PC Gamer', 'Pa jugar al Fornite.',
        '888', 'ORDENA')");
        if(!$query1 || !$query2 || !$query3 || !$query4){
            $result_trans = false;
        }else{
            $result_trans = true;
        }

        if($result_trans){
            $conexion->commit();
            echo "OK";
        }else{
            $conexion->rollback();
            echo "NO";        
        }
        $conexion->close();


        
    ?>
</body>
</html>