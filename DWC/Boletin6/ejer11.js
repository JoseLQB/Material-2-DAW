window.onload = inicio;
function inicio(){
    //ejer11();
    ejer11b();
    document.getElementById("div1").addEventListener("drag", seguir, false);
    document.getElementById("div2").addEventListener("dragenter", seguir, false);

}

function ejer11(){
    var na = document.createElement("div");
    var text1 = document.createTextNode("Te sigo");
    na.setAttribute("id", "sigueme");
    na.setAttribute("style", "position:absolute");
    na.appendChild(text1);
    document.getElementsByTagName("div")[0].appendChild(na);
}

function ejer11b(){

    var divSeg = document.createElement("div");
    var img = document.createElement("img");
    divSeg.appendChild(img);
    img.setAttribute("src", "https://i.pinimg.com/originals/1a/b7/51/1ab75139f3b1e6ecc1f59ffc2a4b0f2e.png");
    divSeg.setAttribute("id", "sigueme");
    divSeg.setAttribute("style", "position:absolute");


    document.getElementsByTagName("div")[0].appendChild(divSeg);

}

function seguir(){
    var x = window.event.x;
    var y = window.event.y;
    
    document.getElementById("sigueme").style.left = x + "px";
    document.getElementById("sigueme").style.top = y + "px";

}

