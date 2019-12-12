window.onload=iniciar;
function iniciar(){
    document.getElementById("dni").addEventListener("blur", validaDNI, false);
    document.getElementById("dni").addEventListener("blur", validaVacio, false);
    document.getElementById("resta").addEventListener("click", rest, false);
    document.getElementById("enviar").addEventListener("click", gurdaDNI, false);
    document.getElementById("enviar").addEventListener("click", comprobar, false);
    document.getElementById("enviar").addEventListener("click", clickCounter, false);
    
}

function validaVacio() {
    var elemento = document.getElementById("dni").value;
    if (elemento == "") {
        var c = document.getElementById("d");
        c.innerHTML = "El campo no puede estar vacío";
    }else{
        return true;
    }
}

function validarLetra(){
    var n = document.getElementById("dni");
    n = n.split("");
    letra = n[9];
   
}

function validaDNI() {
    var numero, letr, letra;
    var expresion_regular_dni = /^[XYZ]?\d{5,8}[A-Z]$/;
    var dni = document.getElementById("dni").value;
    if(expresion_regular_dni.test(dni) === true){
        numero = dni.substr(0,dni.length-1);
        numero = numero.replace('X', 0);
        numero = numero.replace('Y', 1);
        numero = numero.replace('Z', 2);
        letr = dni.substr(dni.length-1, 1);
        numero = numero % 23;
        letra = 'TRWAGMYFPDXBNJZSQVHLCKET';
        letra = letra.substring(numero, numero+1);
        if (letra != letr) {
            var c = document.getElementById("d");
            c.innerHTML = "La letra no se corresponde ";
            return false;
        }else{
            var c = document.getElementById("d");
            c.innerHTML = "Correcto";
            return true;
        }
    }else{
        var c = document.getElementById("d");
        c.innerHTML = "El dni no es correcto";
        return false;
    }
}

function rest(){
    var campo = document.getElementById("dni");
    var con = confirm("¿Quieres restablecer el campo?");
    if(con == true){
        campo.value = "";
    }
}

function gurdaDNI(){
    var dni = document.getElementById("dni").value;
    localStorage.setItem("titulo", dni);
}

function comprobar(){
    if(validaVacio()== true && validaDNI()==true){
        var dni = document.getElementById("dni").value;
        if (typeof(Storage) !== "undefined") {

            localStorage.setItem("DNI", dni);

            document.getElementById("c").innerHTML = "El DNI guardado es " + localStorage.getItem("DNI");
        } else {
            document.getElementById("c").innerHTML = "No...";
        }
    }
}

function clickCounter() {
    if(validaVacio()== true && validaDNI()==true){
        if (typeof(Storage) !== "undefined") {
        if (localStorage.clickcount) {
            
            localStorage.clickcount = Number(localStorage.clickcount)+1;
        } else {
            localStorage.clickcount = 1;
        }
        document.getElementById("b").innerHTML = localStorage.clickcount + " .";
        } else {
        document.getElementById("b").innerHTML = "No...";
        }
    }
}
/*
function guardar(){
    var dni = document.getElementById("dni").value;
    if(dni == localStorage.getItem("DNI")){
        
    }
}*/