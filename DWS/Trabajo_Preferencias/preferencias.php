<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <div class="pref">
        <h3>Selecciona Preferencias</h3>
        <form action="" method="post">
            <table>
                <tr>
                    <td>Idioma</td>
                    <td>
                        <select name="idioma" id="">
                            <option value="Inglés">Inglés</option>
                            <option value="Francés">Francés</option>
                            <option value="Español">Español</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Perfil público</td>
                    <td>
                        <select name="perfil" id="">
                            <option value="sí">Sí</option>
                            <option value="no">No</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Zona horaria</td>
                    <td>
                        <?php 
                        /*if($_COOKIE["Hora"] = $_POST["hora"]){

                        }*/
                        
                        ?>
                        <select name="hora" id="">
                            <option value="GMT-2">GMT-2</option>
                            <option value="GMT-1">GMT-1</option>
                            <option value="GMT">GMT</option>
                            <option value="GMT+1">GMT+1</option>
                            <option value="GMT+2">GMT+2</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><input type="submit" value="Establecer Preferencias" name="est"></td>
                </tr>
                <tr>
                    <td><a href="mostrar.php">Mostrar Preferencias</a></td>
                </tr>
                
            </table>
        </form>
    </div>
    <?php
    if(isset($_POST["est"])){
        session_start();
        setcookie("Idioma", $_POST["idioma"], time() +4000);
        setcookie("Perfil", $_POST["perfil"], time() +4000);
        setcookie("Hora", $_POST["hora"], time() +4000);
        ?>
        <font color="green">Información guardada en el usuario</font>
        <?php
    }
    
    ?>
</body>
</html>