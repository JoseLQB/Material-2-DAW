window.addEventListener('load',iniciar, false);
function iniciar() {
    cabecera();
    document.getElementsByTagName('a')[0].addEventListener('click',muestra, false);
}

function cabecera() {
    var titulo = document.createElement('title');
    var nuevoTexto = document.createTextNode('Este es el ejercicio 10');
    titulo.appendChild(nuevoTexto);
    document.getElementsByTagName("head")[0].appendChild(titulo);
}

function muestra() {
    if (document.getElementById("capa")!=null) {
        document.getElementsByTagName("body")[0].removeChild(document.getElementById("capa"));
    }
    var izq = event.clientX;
    var top = event.clientY;
    var capa = document.createElement('div');
    var texto = document.createTextNode('Te sigo');
    capa.appendChild(texto);
    capa.setAttribute("id", "capa");
    capa.setAttribute("style", "position: absolute; left: "+izq+"px; top: "+top+"px;");
    document.getElementsByTagName("body")[0].appendChild(capa);
}