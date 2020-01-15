<?php 
    require_once("model/Personas.php");

    $persona = new Personas();
    $arrayPersonas = $persona->getPersonas();



    require_once("view/usuarioNormal.php");


?>