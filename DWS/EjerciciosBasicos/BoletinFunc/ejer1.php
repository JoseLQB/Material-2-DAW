<?php
//Ejercicio 1
/* Devuelve verdadero si el número que se pasa como parámetro es capicúa
y falso en caso contrario. */
function esCapicua ($numero){
    $numero = strval($numero);
    $volt = strrev($numero);

    if($numero == $volt){
        return true;
    }else{
        return false;
    }
}

//Ejercicio 2
/*Devuelve verdadero si el número que se pasa como parámetro es primo y
falso en caso contrario. */
function esPrimo ($numero){
    $div=0;
    for($i=2;$i<=$numero;$i++) {
        if($numero%$i==0){
            if(++$div>1){
                return false;
            }
        }
    }
    return true;
}


//Ejercicio 3
/* Devuelve el menor primo que es mayor al número que se pasa como
parámetro. */
function siguientePrimo ($nume){
    
    for($j=$nume+1; $j<1000000; $j++){
        if(esPrimo($j)==true){
            return $j;
        }
    }
}

//Ejercicio 4
/*Dada una base y un exponente devuelve la potencia*/
function potencia ($nume, $poten){
    $potencia = 0;
    for ($i=0; $i<$poten ; $i++){ 
       $potencia*=$nume;
    }
    return $potencia;      
}


//Ejercicio 5
/* Cuenta el número de dígitos de un número entero.*/
function digitos ($nume){
    $nume = strval($nume);
    $nume = str_split($nume);
    $c = 0;
    for ($i=0; $i < sizeof($nume); $i++) { 
        $c=$i+1;
    }
    return $c;
}

//Ejercicio 6
/* Le da la vuelta a un número.*/
function volte ($nume){
    $nume = strval($nume);
    $nume = str_split($nume);
    $volt = "";
    foreach ($nume as $key) {
        $volt = $key . $volt;
    }
    
    /*{ 
        $volt = $volt .$i];
    }*/
    return $volt;
}
//Ejercicio 7
/* Devuelve el dígito que está en la posición n de un número entero. Se
empieza contando por el 0 y de izquierda a derecha. */
function digitoN ($nume, $pos){
    $nume = strval($nume);
    $nume = str_split($nume);
    for ($i=0; $i < sizeof($nume)-1; $i++) { 
        if($i==$nume[$pos]){
            return $nume[$i];
        }
    }

}
//Ejercicio 8
/* posicionDeDigito: Da la posición de la primera ocurrencia de un dígito dentro de
un número entero. Si no se encuentra, devuelve -1.*/
function posicionDeDigito ($nume, $numePos){
    $nume = strval($nume);
    $nume = str_split($nume);
    $contpos = 0;
    foreach ($nume as $k) {
        $contpos++;
        if($numePos == $k){
            return $contpos;
        }
    }
    return -1;
}
/* Ejercicio 18* /
/*Pasar de decimal a binario*/
function aBinario($nume){
    $binario ="";
    while($nume>0){
        $binario = strval($nume%2) . $binario;
        $nume = intval($nume);
        $nume = $nume/2;
    }
    return $binario;
}

function binario ($nume){
    $binario ="";
    while ($nume>0){
        $mod = $nume%2;
        $binario = "$mod". $binario;
        $nume =intval($nume/2);
    }
    return $binario;
    
}
//Ejercicio 29-34
/* generaArrayBiInt: Genera un array de tamaño n x m con números aleatorios cuyo
intervalo (mínimo y máximo) se indica como parámetro */
function ArrayBiInt($min, $max, $tamañoArray){
    
    $arr =[];
    for ($i=0; $i <= $tamañoArray-1 ; $i++) { 
        $al = rand($min, $max);
        $arr[$i]= $al;
    }
    return $arr;
}

/*        foreach (ArrayBiInt(2,9, 10) as $key) {
            echo $key;
            } */


?> 