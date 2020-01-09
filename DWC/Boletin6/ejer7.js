window.onload=inicio;
function inicio(){
    creaLink();
}

function creaLink(){
    var na = document.createElement("a");
    var atr = document.createAttribute("href");
    atr.value = "ejer5.html"; 
    na.setAttributeNode(atr);
    var text1 = document.createTextNode("ENLACE ");
    na.appendChild(text1);
    document.getElementsByTagName("body")[0].appendChild(na);
}