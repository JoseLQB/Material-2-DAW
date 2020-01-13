window.onload=inicio;
function inicio(){
    ejer10();
    document.getElementById("click").addEventListener("click", divOculto, false);
}

function ejer10(){
    var na = document.createElement("a");
    var text1 = document.createTextNode("S o y un e n l a c e");
    na.setAttribute("href", "#");
    na.setAttribute("id", "click");
    na.appendChild(text1);
    document.getElementsByTagName("body")[0].appendChild(na);

    var na2 = document.createElement("div");
    var text1 = document.createTextNode("Hola");
    na2.setAttribute("id", "oculto");
    na2.setAttribute("style", "display:none");
    
    na2.appendChild(text1);
    document.getElementsByTagName("body")[0].appendChild(na2);
}

function divOculto(){
    var na = document.createElement("div");
    var text1 = document.createTextNode("Hola");
    na.setAttribute("id", "oculto");
    na.appendChild(text1);
    document.getElementsByTagName("body")[0].appendChild(na);
}