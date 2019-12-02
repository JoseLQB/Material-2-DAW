//Ejercicio 1

var nuevaVentana = (cadena)=>{
    var left = (screen.width/2)-(75+10);
    var arriba = (screen.height/2)-(100-50);
    var abrir = window.open('','Nueva',"width=200,height=200,left="+left+",top="+arriba+"'");         
    abrir.document.write('<title>Datos</title>'+cadena);  
}

function mayusculas() {
    //document.getElementsByTagName("input")[0].value=document.getElementsByTagName("input")[0].value.toUpperCase();
    for(var i = 0; i<document.getElementsByTagName("input").length; i++){
        document.getElementsByTagName("input")[i].value=document.getElementsByTagName("input")[i].value.toUpperCase();
    }
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