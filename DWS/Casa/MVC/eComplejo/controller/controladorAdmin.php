<?php 


    require_once("../model/Personas.php");

    $persona = new Personas();
    $arrayPersonas = $persona->getPersonas();

    require_once("../view/personas_view.php");



    ///////////////////////////////////////////////////////

  

?>