window.onload=inicio;
function inicio(){
    ejer9();
    cord();
    document.getElementById("s").addEventListener("mouseover", verCordenadas, false);
}


function ejer9(){
    var na = document.createElement("div");
    var text1 = document.createTextNode("Hola : aloH");
    na.setAttribute("id", "s");
    na.appendChild(text1);
    document.getElementsByTagName("body")[0].appendChild(na);
}

function cord(){
    var ns = document.createElement("div");
    var text1 = document.createTextNode("Hola : aloH");
    ns.setAttribute("id", "c");
    document.getElementsByTagName("body")[0].appendChild(ns);
}


function verCordenadas(){
    var x = window.event.clientX;
    var y = window.event.clientY;
    document.getElementById("c").innerHTML = "Valor de x: " +x + "<br> Valor de y: " + y;
}