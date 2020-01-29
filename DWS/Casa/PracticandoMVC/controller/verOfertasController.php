<?php 

require_once "../model/Oferta.php";

$data = Oferta::mostrarTodo();

if(isset($_POST["insertar"])){
    include "../views/vista1.php";
}else if(isset($_POST["borrar"])){
    include "../views/vista2.php";
}else if(isset($_POST["order"])){
    include "../views/vista3.php";
}
?>