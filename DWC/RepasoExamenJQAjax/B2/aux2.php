<?php
    
    $json = '[{"src":"/img/img1.jpg", "desc": "descripcion1", "specs": ["spec11", "spec12"]},{"src":"/img/img2.jpg", "desc": "descripcion2", "specs": ["spec21", "spec22"]}]';
    echo $json;
    
    
    $var = json_decode($json);

    var_dump($var);
    
    switch(json_last_error()) {
            case JSON_ERROR_NONE:
                echo ' - Sin errores';
            break;
            case JSON_ERROR_DEPTH:
                echo ' - Excedido tamaño máximo de la pila';
            break;
            case JSON_ERROR_STATE_MISMATCH:
                echo ' - Desbordamiento de buffer o los modos no coinciden';
            break;
            case JSON_ERROR_CTRL_CHAR:
                echo ' - Encontrado carácter de control no esperado';
            break;
            case JSON_ERROR_SYNTAX:
                echo ' - Error de sintaxis, JSON mal formado';
            break;
            case JSON_ERROR_UTF8:
                echo ' - Caracteres UTF-8 malformados, posiblemente están mal codificados';
            break;
            default:
                echo ' - Error desconocido';
            break;
        }
?>