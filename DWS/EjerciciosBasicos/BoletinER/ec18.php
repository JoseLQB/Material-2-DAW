<!--Realiza un programa que diga si un número entero positivo introducido por teclado es
capicúa. Se permiten números de hasta 5 cifras.-->
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<form action="ec18.php" method="post" name="ej18">
    <input type="text" name="numero"/>
    <input type="submit" value="enviar"/>
</form>
    <?php
    $numero = $_POST["numero"];
    $arr = str_split($numero);

    if(sizeof($arr)==2){
        if($arr[0] == $arr[1]){
            echo $numero . " es un número capicua.";
        }else{
            echo $numero . " no es un número capicua.";
        }
    }elseif(sizeof($arr)==3){
        if($arr[0] == $arr[2]){
            echo $numero . " es un número capicua.";
        }else{
            echo $numero . " no es un número capicua.";
        }
    }elseif(sizeof($arr)==4){
        if($arr[0] == $arr[3]){
            echo $numero . " es un número capicua.";
        }else{
            echo $numero . " no es un número capicua.";
        }
    }elseif(sizeof($arr)==5){
        if($arr[0] == $arr[4]){
            echo $numero . " es un número capicua.";
        }else{
            echo $numero . " no es un número capicua.";
        }
    }
    
    
    ?>
</body>
</html>