window.addEventListener("load", inicio, false);
function inicio(){
    document.getElementsByTagName("input")
    for(var i = 0; i<document.getElementsByTagName("input").length; i++){
        document.getElementsByTagName("input")[i].addEventListener("click", mayusculas, false);
    }
    
}

function mayusculas() {
    //document.getElementsByTagName("input")[0].value=document.getElementsByTagName("input")[0].value.toUpperCase();
        this.value=this.value.toUpperCase();
        nuevaVentana(this.value);  
}

var nuevaVentana = (cadena)=>{
    var left = (screen.width/2)-(75+10);
    var arriba = (screen.height/2)-(100-50);
    var abrir = window.open('','Nueva',"width=200,height=200,left="+left+",top="+arriba+"'");         
    abrir.document.write('<title>Datos</title>'+cadena);  
}