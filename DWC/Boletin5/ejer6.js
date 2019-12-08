window.onload = iniciar;
function iniciar(){
    document.getElementById("enviar").addEventListener("click", confir, false);
}

function confir(){
    var ok = true;
    var regex = /^[A-Z ]+$/gm;
    var campo = document.getElementById("nombre").value;
    if(campo.length<1 || !regex.test(campo)){
        ok = false;
    }
    if(!ok){
        alert("No lo estás haciendo bien");
    }
    return ok;
}