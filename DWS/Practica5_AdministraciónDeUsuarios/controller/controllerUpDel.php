<?php 

//echo "hola";


require_once('../Model/UsuarioDb.php');  
if(isset($_POST['del'])){
    //Esta información se recoge de los campos ocultos:
    $ide = $_POST['id'];;
    $us = $_POST['usuario'];
    $mail = $_POST['email'];
    $rol = $_POST['rol'];
    $pass = $_POST['pwd'];

    $usuario = new UsuarioDb();
    $insert = $usuario->delete($ide, $us, $mail, $rol, $pass);
    header("location:controllerUserVista.php");
    
}elseif(isset($_POST['edit'])){
    $id =$_POST["id"];
    $us =$_POST["nombre"];
    $mail =$_POST["correo"];
    $rol = $_POST["rol"];
    $pass = $_POST["pwd"];
    
    //header("location:../view/formUpdate.php");
    
    $usuario = new UsuarioDb();
    $insert = $usuario->update($id, $us, $mail, $rol, $pass);
    header("location:controllerUserVista.php");
    

}elseif (isset($_POST["up"])) {
    $id = $_POST["id"];
    $us = $_POST["nombre"];
    $mail = $_POST["correo"];
    $rol = $_POST["rol"];
    $pass = $_POST["cont"];
    $usuario = new UsuarioDb();
    $insert = $usuario->update($us, $mail, $rol, $pass);
    header("location:controllerUserVista.php");

}


?>