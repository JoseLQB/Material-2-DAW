<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php 
    //CONEXIÓN
    try{
        $con= new PDO("mysql:host=localhost; dbname=dwes", "root", "");
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $con->exec("SET CHARACTER SET UTF8"); 
        
    }catch(Exception $e){
        die("Error" . $e->getMessage());
        echo "Linea del error" . $e->getLine();
    }
    try{
        $con->beginTransaction();
        $con->query("INSERT INTO PRODUCTO (cod, nombre, nombre_corto, descripcion,
                    PVP, familia) VALUES ('es0122', 'null', 'Portatil Toshiba', 'Portatil nuevo',
                    '1000', 'CONSOL')");
        $con->query("INSERT INTO PRODUCTO (cod, nombre, nombre_corto, descripcion,
                    PVP, familia) VALUES ('exxa122', 'null', 'Portatil Toshib2a', 'Portatil nuev2o',
                    '1020', 'CONSOL')");
        $con->commit();
                    

    }catch(PDOException $ex){
        echo $ex->getMessage();
        $con->rollBack();
    }



    
    
    ?>
</body>
</html>