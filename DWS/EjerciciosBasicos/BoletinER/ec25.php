<!--Realiza el control de acceso a una caja fuerte. La combinación será un número de 4
cifras. El programa nos pedirá la combinación para abrirla. Si no acertamos, se nos
mostrará el mensaje“Lo siento, esa no es la combinación” y si acertamos se nos
dirá “La caja fuerte se ha abierto satisfactoriamente”. Tendremos cuatro
oportunidades para abrir la caja fuerte.-->
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<form action="ec25.php" method="post" name="ej25">
    <input type="text" name="numero"/> Introduce el número que abre la caja fuerte
    <input type="submit" value="enviar"/>
</form>
<?php

$combinación =0666 ;
$input =$_POST["numero"];
$intentos = 4;

while($input<=9999){
    if($intentos>0){
        if($input = $combinación){
            echo "Has abierto la caja fuerte";
            break;
        }else{
            echo "Sigue intentándolo";
        }
    }else{
        echo "Has agotado todos los intentos";
    }
    $intentos--;
}


?>
    
</body>
</html>