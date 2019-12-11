window.onload=iniciar;
function iniciar(){
    document.getElementById("ver").addEventListener("click",verCookies);
    document.getElementById("crear").addEventListener("click",crearModifCookie);
    document.getElementById("mod").addEventListener("click",crearModifCookie);
    document.getElementById("leer").addEventListener("click",leerCookie);
    document.getElementById("borrar").addEventListener("click",borrarCookie);
}

function verCookies(){
    alert("Cookies actuales:\n"+document.cookie);
}

function crearModifCookie(){
    var nombre = prompt("Introduzca el nombre de la cookie");
    var valor = prompt("Introduzca su valor");
    var expiracion = parseInt(prompt("Introduzca el número de días para que expire"));
    setCookie(nombre, valor, expiracion);
    verCookies();
}

function leerCookie(){
    var nombre = prompt("Introduzca el nombre de la cookie a consultar");
    var resultado = getCookie(nombre);
    alert(resultado);
}

function borrarCookie(){
    var nombre = prompt("Introduzca el nombre de la cookie a borrar");
    deleteCookie(nombre);
    verCookies();
}

function deleteCookie(nombre){
    setCookie(nombre,"",0);
}

function setCookie(nombre, valor, expiracion){
    var d = new Date();
    d.setTime(d.getTime()+expiracion*24*60*60*1000);
    var expiracion = "expires="+d.toUTCString();
    document.cookie = nombre+"="+valor+";"+expiracion+";path=/";
}

function getCookie(nombre){
    var nom = nombre+"=";
    var array = document.cookie.split(";");
    for (var i=0; i<array.length; i++){
        var c = array[i];
        while (c.charAt(0)==" "){ 
            c = c.substring(1);
        }
        if (c.indexOf(nombre)==0){
            return c.substring(nom.length, c.length);
        }
    }
    return "";
}