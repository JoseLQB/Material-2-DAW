<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
   <title>Document</title>
   <style>
   h1{
       text-align:center;
   }
   </style>
</head>
<body>
    <h1>Practica 5</h1><br>
    <center><h2>Introduce tus datos para acceder a la aplicación</h2></center>
    <div id="regis">
    <form action="" method="post">
    <table border="0" align="center">
        <tr>
            <td>Usuario &nbsp; &nbsp;</td>
            <td><input type="text" name="usuario" id="" required></td>
        </tr>
        <tr>
            <td>Contraseña &nbsp; &nbsp;</td>
            <td><input type="password" name="pass" id="" required></td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" name="login" value="LOGIN"></td>
        </tr>
    </table><br><br>
    </form>
    
    <?php 
    if(isset($_POST["login"])){
        include("controller/controladorAdmin.php");
    }else{
        include("controller/controladorNormal.php");
    }
    ?>
</body>
</html>