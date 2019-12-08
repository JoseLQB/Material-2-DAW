window.onload = iniciar;
function iniciar(){
    document.getElementById("borra").addEventListener("click", borrar, false);
}
function borrar(){
    var el = document.getElementById("ejer9");
    var as = el.getElementsByTagName("input");
    var opcion = confirm("Estás seguro que quieres borrar");
    if(opcion == true){
        for (let i = 0; i < as.length; i++) {
            if(as[i].value != "Enviar"&&as[i].value != "Borrar")
                as[i].value = "";
        }
    }
    
}