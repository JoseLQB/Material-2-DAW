<?php 

require_once "../model/Oferta.php";

$oferta = new Oferta("", $_POST["titulo"], $_POST["imagen"], $_POST["descripcion"]);
$oferta->insert();

header("Location:../views/vista1.php");
?>