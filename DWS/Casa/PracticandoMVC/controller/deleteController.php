<?php 

require_once "../model/Oferta.php";


Oferta::delete($_POST["id"]);

header("Location:../views/vista2.php");
?>