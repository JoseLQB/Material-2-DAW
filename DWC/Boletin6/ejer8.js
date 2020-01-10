window.onload=inicio;
function inicio(){
    ejer8();
}

function ejer8(){
    var creaDiv = document.createElement("div");
    var creaH1 = document.createElement("h1");
    creaDiv.appendChild(creaH1);
    var texto1 = document.createTextNode("Subtituloo");
    creaH1.appendChild(texto1);
    document.getElementsByTagName("body")[0].appendChild(creaDiv);
    var creaUl = document.createElement("ul");
    creaH1.appendChild(creaUl);




}

