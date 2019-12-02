<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <div class="pref">
        <h3>Selecciona Preferencias</h3>
        <form action="preferencias.php" method="post">
            <table>
                <tr>
                    <td>Idioma</td>
                    <td>
                        <select name="idioma" id="">
                            <?php 
                           if(isset($_COOKIE["Idioma"])){
                                    echo (isset($_POST["idioma"])&&$_POST["idioma"] == "Inglés") ? "<option value='Inglés' selected>Inglés</option>" :"<option value='Inglés'>Inglés</option>";
                                    echo (isset($_POST["idioma"])&&$_POST["idioma"] == "Francés") ?  "<option value='Francés' selected>Francés</option>" :"<option value='Francés'>Francés</option>";
                                    echo (isset($_POST["idioma"])&&$_POST["idioma"] == "Español") ?  "<option value='Español' selected>Español</option>" :"<option value='Español'>Español</option>";
                                    echo (isset($_POST["idioma"])&&$_POST["idioma"] == "Japonés") ?  "<option value='Japonés' selected>Japonés</option>" :"<option value='Japonés'>Japonés</option>";
                                    echo (isset($_POST["idioma"])&&$_POST["idioma"] == "Chino") ?  "<option value='Chino' selected>Chino</option>" :"<option value='Chino'>Chino</option>";
                                    echo (isset($_POST["idioma"])&&$_POST["idioma"] == "Alemán") ?  "<option value='Alemán' selected>Alemán</option>" :"<option value='Alemán'>Alemán</option>";
                                    echo (isset($_POST["idioma"])&&$_POST["idioma"] == "Italiano") ?  "<option value='Italiano' selected>Italiano</option>" :"<option value='Italiano'>Italiano</option>";
                                }else{
                                if(isset($_POST["est"])){
                                    echo (isset($_POST["idioma"])&&$_POST["idioma"] == "Inglés") ? "<option value='Inglés' selected>Inglés</option>" :"<option value='Inglés'>Inglés</option>";
                                    echo (isset($_POST["idioma"])&&$_POST["idioma"] == "Francés") ?  "<option value='Francés' selected>Francés</option>" :"<option value='Francés'>Francés</option>";
                                    echo (isset($_POST["idioma"])&&$_POST["idioma"] == "Español") ?  "<option value='Español' selected>Español</option>" :"<option value='Español'>Español</option>";
                                    echo (isset($_POST["idioma"])&&$_POST["idioma"] == "Japonés") ?  "<option value='Japonés' selected>Japonés</option>" :"<option value='Japonés'>Japonés</option>";
                                    echo (isset($_POST["idioma"])&&$_POST["idioma"] == "Chino") ?  "<option value='Chino' selected>Chino</option>" :"<option value='Chino'>Chino</option>";
                                    echo (isset($_POST["idioma"])&&$_POST["idioma"] == "Alemán") ?  "<option value='Alemán' selected>Alemán</option>" :"<option value='Alemán'>Alemán</option>";
                                    echo (isset($_POST["idioma"])&&$_POST["idioma"] == "Italiano") ?  "<option value='Italiano' selected>Italiano</option>" :"<option value='Italiano'>Italiano</option>";
                                }else{
                                    echo "<option value='Inglés'>Inglés</option>";
                                    echo "<option value='Francés'>Francés</option>";
                                    echo "<option value='Español'>Español</option>";
                                    echo "<option value='Japonés'>Japonés</option>";
                                    echo "<option value='Chino'>Chino</option>";
                                    echo "<option value='Alemán'>Alemán</option>";
                                    echo "<option value='Italiano'>Italiano</option>";
                            }
                        }
                            ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Perfil público</td>
                    <td>
                        <select name="perfil" id="">   
                        <?php
                        if(isset($_COOKIE["Perfil"])){ 
                            echo (isset($_COOKIE["Perfil"])&&$_COOKIE["Perfil"] == "sí") ?  "<option value='sí' selected>Sí</option>" :"<option value='sí'>Sí</option>";
                            echo (isset($_COOKIE["Perfil"])&&$_COOKIE["Perfil"] == "no") ?  "<option value='no' selected>No</option>" :"<option value='no'>No</option>";
                        }else{
                            if(isset($_POST["est"])){
                                echo (isset($_POST["perfil"])&&$_POST["perfil"] == "sí") ?  "<option value='sí' selected>Sí</option>" :"<option value='sí'>Sí</option>";
                                echo (isset($_POST["perfil"])&&$_POST["perfil"] == "no") ?  "<option value='no' selected>No</option>" :"<option value='no'>No</option>";
                             
                            }else{
                                echo "<option value='sí'>Sí</option>";
                                echo "<option value='no'>No</option>";

                            }
                        }
                        ?> 
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Zona horaria</td>
                    <td>
                        <select name="hora" id=""><?php 
                        if(isset($_COOKIE["Hora"])){
                            echo (isset($_COOKIE["Hora"])&&$_COOKIE["Hora"] == "GMT-2") ?  "<option value='GMT-2' selected>GMT-2</option>" :"<option value='GMT-2'>GMT-2</option>";
                            echo (isset($_COOKIE["Hora"])&&$_COOKIE["Hora"] == "GMT-1") ?  "<option value='GMT-1' selected>GMT-1</option>" :"<option value='GMT-1'>GMT-1</option>";
                            echo (isset($_COOKIE["Hora"])&&$_COOKIE["Hora"] == "GMT") ?  "<option value='GMT' selected>GMT</option>" :"<option value='GMT'>GMT</option>";
                            echo (isset($_COOKIE["Hora"])&&$_COOKIE["Hora"] == "GMT+1") ?  "<option value='GMT+1' selected>GMT+1</option>" :"<option value='GMT+1'>GMT+1</option>";
                            echo (isset($_COOKIE["Hora"])&&$_COOKIE["Hora"] == "GMT+2") ?  "<option value='GMT+2' selected>GMT+2</option>" :"<option value='GMT+2'>GMT+2</option>";
                        }else{
                            if(isset($_POST["est"])){
                                echo (isset($_POST["Hora"])&&$_POST["Hora"] == "GMT-2") ?  "<option value='GMT-2' selected>GMT-2</option>" :"<option value='GMT-2'>GMT-2</option>";
                                echo (isset($_POST["Hora"])&&$_POST["Hora"] == "GMT-1") ?  "<option value='GMT-1' selected>GMT-1</option>" :"<option value='GMT-1'>GMT-1</option>";
                                echo (isset($_POST["Hora"])&&$_POST["Hora"] == "GMT") ?  "<option value='GMT' selected>GMT</option>" :"<option value='GMT'>GMT</option>";
                                echo (isset($_POST["Hora"])&&$_POST["Hora"] == "GMT+1") ?  "<option value='GMT+1' selected>GMT+1</option>" :"<option value='GMT+1'>GMT+1</option>";
                                echo (isset($_POST["Hora"])&&$_POST["Hora"] == "GMT+2") ?  "<option value='GMT+2' selected>GMT+2</option>" :"<option value='GMT+2'>GMT+2</option>";
                            
                            }else{
                                echo "<option value='GMT-2'>GMT-2</option>";
                                echo "<option value='GMT-1'>GMT-1</option>";
                                echo "<option value='GMT'>GMT</option>";
                                echo "<option value='GMT+1'>GMT+1</option>";
                                echo "<option value='GMT+2'>GMT+2</option>";
                            }
                        }
                            ?>
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