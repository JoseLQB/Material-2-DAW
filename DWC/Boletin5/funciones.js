window.addEventListener("load", inicio, false);
function inicio(){
    document.getElementsByTagName("input")
    for(var i = 0; i<document.getElementsByTagName("input").length; i++){
        document.getElementsByTagName("input")[i].addEventListener("blur", mayusculas, false);
    }
    
}

function bor(){
    for(var i = 0; i<document.getElementsByTagName("input").length; i++){
        document.getElementsByTagName[i].value == "";      
    }
}

//Ejercicio 1

var nuevaVentana = (cadena)=>{
    var left = (screen.width/2)-(75+10);
    var arriba = (screen.height/2)-(100-50);
    var abrir = window.open('','Nueva',"width=200,height=200,left="+left+",top="+arriba+"'");         
    abrir.document.write('<title>Datos</title>'+cadena);  
}

function mayusculas() {
    //document.getElementsByTagName("input")[0].value=document.getElementsByTagName("input")[0].value.toUpperCase();
        this.value=this.value.toUpperCase();
    
}


//Ejercicio 4

function check() {
    var q1 = document.cuestionario.q1.value;
    var q2 = document.cuestionario.q2.value;
    var okey = 0;

    if(q1 == "ladra"){
        okey++;
    }
    if(q2 == "maulla"){
        okey++;
    }
    if(okey ==2){
        alert("Has ganado");
    }else{
        alert("Sigue intentándolo");
    }
}

//Ejercicio 5


function sms(cara) {  
    var lim = 145;
    var car = cara.value.length;
    var max = document.getElementById("ejer6").setAttribute("max", lim);
    var msg = document.getElementById("d");
    var resto = lim - car;
    msg.innerHTML = resto;
}

//Ejercicio 6

function confir(){
    var ok = true;
    var regex = /[A-Z][a-z]{0}/gm;
    var campo = document.getElementById("nombre").value;
    if(campo.length<1 || !regex.test(campo)){
        ok = false;
    }
    if(!ok){
        alert("No lo estás haciendo bien");
    }
    return ok;
} 

//Ejercicio 7


function cambiarColor(x){
    var b = document.getElementById("formulario");
    b.style.backgroundColor = x.value;
}

//Ejercicio 8

function validaPass() {
    for(var i = 0; i<document.getElementsByTagName("input").length; i++){
        if(document.getElementsByTagName[i].length<1){
            alert("Completa todos los campos");
        }
    }
    if(document.getElementById("pass").value!=document.getElementById("passc").value){  
        alert("Deben coincidir las contraseñas");
    }
        
}

//Ejercicio 9

