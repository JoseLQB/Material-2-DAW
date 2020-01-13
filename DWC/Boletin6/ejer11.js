window.onload = inicio;
function inicio(){
    ejer11();
    document.getElementById("div1").addEventListener("mousemove", seguir, false);

}

function ejer11(){
    var na = document.createElement("div");
    var text1 = document.createTextNode("Te sigo");
    na.setAttribute("id", "sigueme");
    na.setAttribute("style", "position:absolute");
    na.appendChild(text1);
    document.getElementsByTagName("div")[0].appendChild(na);
}

function seguir(){
    var x = window.event.x;
    var y = window.event.y;
    
    document.getElementById("sigueme").style.left = x + "px";
    document.getElementById("sigueme").style.top = y + "px";

}