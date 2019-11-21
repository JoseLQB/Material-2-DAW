<?php

function fecha($semana, $dia, $mes){

    $semana = date("w");
    $dia = date("a");
    $mes =date("m");
    $d = "";
    $m = "";
    switch ($semana) {
        case 1:
            $d= "lunes";
            break;
            case 2:
            $d= "martes";
            break;
            case 3:
            $d= "miercoles";
            break;
            case 4:
            $d= "jueves";
            break;
            case 5:
            $d= "viernes";
            break;
            case 6:
            $d= "sabado";
            break;
            case 7:
            $d= "domingo";
            break;
    }

    switch ($m) {
            case 01:
            $m= "enero";
            break;
            case 02:
            $m ="febrero";
            break;
            case 03:
            $m= "marzo";
            break;
            case 04:
            $m= "abril";
            break;
            case 05:
            $m ="mayo";
            break;
            case 06:
            $m= "junio";
            break;
            case 07:
            $m ="julio";
            break;
            case 08:
            $m ="agosto";
            break;
            case 09:
            $m ="septiembre";
            break;
            case 10:
            $m ="octubre";
            break;
            case 11:
            $m ="noviembre";
            break;
            case 12:
            $m ="diciembre";
            break;
    }
    return $d . $m;
}

?>