<?php 



    include "../model/Personas.php";
    $persona = new Personas();
    $arrayPersonas = $persona->login();


    echo "-------";

?>