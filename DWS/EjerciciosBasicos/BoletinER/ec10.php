<!--Escribe  un  programa  que  nos  diga  el  horóscopo  a  partir  del  día  y  el  mes  de nacimiento.-->
<!--HACER 10,11,14,15,16,17,18,22,23,24,25-->
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
    $dia = 29;
    $mes = "febrero";
    switch ($mes) {
        case 'enero':
            if($dia>=21&&$dia<=31){
                echo "Acuario";
            }elseif ($dia>=1&&$dia<=20){
                echo "Capricornio";
            }
            break;

        case 'febrero':
            if($dia>=1&&$dia<=19){
                echo "Acuario";
            }elseif ($dia>=20&&$dia<=29){
                echo "Piscis";
            }
            break;

        case 'marzo':
            if($dia>=1&&$dia<=20){
                echo "Piscis";
            }elseif ($dia>=21&&$dia<=31){
                echo "Aries";
            }
            break;

        case 'abril':
            if($dia>=1&&$dia<=20){
                echo "Aries";
            }elseif ($dia>=21&&$dia<=30){
                echo "Tauro";
            }
            break;
        
        case 'mayo':
            if($dia>=1&&$dia<=20){
                echo "Piscis";
            }elseif ($dia>=21&&$dia<=31){
                echo "Aries";
            }
            break;

        case 'junio':
            if($dia>=1&&$dia<=20){
                echo "Géminis";
            }elseif ($dia>=21&&$dia<=30){
                echo "Cáncer";
            }
            break;

        case 'julio':
            if($dia>=1&&$dia<=22){
                echo "Cáncer";
            }elseif ($dia>=23&&$dia<=31){
                echo "Leo";
            }
            break;

        case 'agosto':
            if($dia>=1&&$dia<=22){
                echo "Leo";
            }elseif ($dia>=232&&$dia<=31){
                echo "Virgo";
            }
            break;

        case 'septiembre':
            if($dia>=1&&$dia<=22){
                echo "Virgo";
            }elseif ($dia>=23&&$dia<=30){
                echo "Libra";
            }
            break;

        case 'octubre':
            if($dia>=1&&$dia<=22){
                echo "Libra";
            }elseif ($dia>=23&&$dia<=31){
                echo "Escorpio";
            }
            break;

        case 'noviembre':
            if($dia>=1&&$dia<=21){
                echo "Escorpio";
            }elseif ($dia>=22&&$dia<=31){
                echo "Sagitario";
            }
            break;

        case 'diciembre':
            if($dia>=1&&$dia<=21){
                echo "Sagitario";
            }elseif ($dia>=22&&$dia<=31){
                echo "Capricornio";
            }
            break;
    }
    ?>
</body>
</html>