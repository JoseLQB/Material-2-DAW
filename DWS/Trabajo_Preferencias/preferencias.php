<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php 
if(isset($_POST["est"])){
    $idioma = $_POST["idioma"];
    $perfil = $_POST["perfil"];
    $hora = $_POST["hora"];
}elseif(isset($_SESSION["idioma"]) && isset($_SESSION["idioma"]) && isset($_SESSION["hora"])){
    $idioma = $_SESSION["idioma"];
    $perfil = $_SESSION["perfil"];
    $hora = $_SESSION["hora"];
}else{
    $idioma;
    $perfil;
    $hora;
}
?>
    <div class="pref">
        <h3>Selecciona Preferencias</h3>
        <form action="preferencias.php" method="post">
            <table>
                <tr>
                    <td>Idioma</td>
                    <td>
                        <select name="idioma" id="">
                            <option value="Español" <?php if ($idioma=="Español") {echo "selected";} ?>>Español</option>
                            <option value="Inglés" <?php if ($idioma=="Inglés") {echo "selected";} ?>>Inglés</option>
                            <option value="Francés" <?php if ($idioma=="Francés") {echo "selected";} ?>>Francés</option>
                            <option value="Japonés" <?php if ($idioma=="Japonés") {echo "selected";} ?>>Japonés</option>
                            <option value="Alemán" <?php if ($idioma=="Alemán") {echo "selected";} ?>>Alemán</option>
                            <option value="Italiano" <?php if ($idioma=="Italiano") {echo "selected";} ?>>Italiano</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Perfil público</td>
                    <td>
                        <select name="perfil" id="">   
                            <option value="Sí" <?php if ($perfil=="Sí") {echo "selected";} ?>>Sí</option>
                            <option value="No" <?php if ($perfil=="No") {echo "selected";} ?>>No</option>
                        
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Zona horaria</td>
                    <td>
                        <select name="hora" id="">
                            <option value="GMT-2" <?php if ($hora=="GMT-2") {echo "selected";} ?>>GMT-2</option>
                            <option value="GMT-1" <?php if ($hora=="GMT-1") {echo "selected";} ?>>GMT-1</option>
                            <option value="GMT" <?php if ($hora=="GMT") {echo "selected";} ?>>GMT</option>
                            <option value="GMT+1" <?php if ($hora=="GMT+1") {echo "selected";} ?>>GMT+1</option>
                            <option value="GMT+2" <?php if ($hora=="GMT+2") {echo "selected";} ?>>GMT+2</option>
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

        $_SESSION["idioma"]=$_POST["idioma"];
        $_SESSION["perfil"]=$_POST["perfil"];
        $_SESSION["hora"]=$_POST["hora"];

        ?>
        <font color="green">Información guardada en el usuario</font>
        <?php
    }
    
    ?>
</body>
</html>