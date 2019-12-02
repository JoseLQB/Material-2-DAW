<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php 
    $a =1;
    $b =2;

    echo ($b>$a) ? "mayor" : "menor";

    if(isset($_COOKIE["Idioma"])&&$_COOKIE["Idioma"] == "Inglés"){
        echo "<option value='Inglés' selected>Inglés</option>";
    }else{
        echo "<option value='Inglés'>Inglés</option>";
    }

    echo (isset($_COOKIE["Idioma"])&&$_COOKIE["Idioma"] == "Inglés") ?  "<option value='Inglés' selected>Inglés</option>" :"<option value='Inglés'>Inglés</option>";
    if(isset($_COOKIE["Idioma"])&&$_COOKIE["Idioma"] == "Francés"){
        echo "<option value='Francés' selected>Francés</option>";
    }else{
        echo "<option value='Francés'>Francés</option>";
    }

    
    
    ?>

</body>
</html>