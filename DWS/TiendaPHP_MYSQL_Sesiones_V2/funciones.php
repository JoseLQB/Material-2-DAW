<?php 

    function conexionPDO($host, $dbname, $name, $pass){
        try{
            $conn= new PDO("mysql:host=$host; dbname=$dbname", "$name", "$pass");
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $conn->exec("SET CHARACTER SET UTF8");
            // echo "ok"; 
        }catch(Exception $e){
            die("Error" . $e->getMessage());
            echo "Linea del error" . $e->getLine();
        }
        return $conn;
    }

?>