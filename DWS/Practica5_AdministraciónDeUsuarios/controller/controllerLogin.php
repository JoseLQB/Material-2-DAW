<?php 

require_once('../Model/Db.php');


$user = $_POST['usuario'];
$pass = $_POST['pwd'];

require_once('../Model/UsuarioDb.php');

$usuario = new UsuarioDb;
$arrayUsuario = $usuario->getUsuario();


header("Location:../view/error.php");


///Comprueba el loguin ==>

for ($i=0; $i < sizeof($arrayUsuario); $i++) {
   // echo $arrayUsuario[$i]['id'];
    if($arrayUsuario[$i]['usuario']==$user and $arrayUsuario[$i]['pwd']==$pass){
        if($arrayUsuario[$i]['rol']== 'admin'){
         header('Location:controllerUserVista.php');
        ///echo "admin";
        }else{
            if($arrayUsuario[$i]['rol']== 'normal'){
            header('Location:../view/vista.php');
            echo "otro";
        }
    else{
        header("Location:../index.php");
        echo "no vale";
    }
}
}
}
?>