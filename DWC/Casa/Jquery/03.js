/*window.onload = inicio;
function inicio(){
    ocultaImgs();
}
function ocultaImgs(){
    var imagenes = document.querySelectorAll("#carrete img"); //selecciona todos los img con id carrete y los mete en un array
    for(var i = 0; i<imagenes.length; i++){
        imagenes[i].style.visibility = "hidden";
    }
}*/

$(document).ready(function(){
    $("#carrete img").hide()
    $(document).click(function(){
        $("#carrete img").hide().fadeIn(1000);
    })
});