<?php
    try{
        $conn= new PDO("mysql:host=localhost; dbname=dwes", "root", "");
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $conn->exec("SET CHARACTER SET UTF8");
        // echo "ok"; 
    }catch(Exception $e){
        die("Error" . $e->getMessage());
        echo "Linea del error" . $e->getLine();
    }

?>

<!--
//CREATE TABLE USUARIOS (ID INT NOT NULL AUTO_INCREMENT PRIMARY KEY, USUARIOS VARCHAR (20) NOT NULL, PASS VARCHAR (20) NOT NULL)
-->