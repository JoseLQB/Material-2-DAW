window.onload = inicio;
function inicio(){
    s();
}
function s(){
    var nt = document.createElement("table");
    var atr = document.createAttribute("border");
    atr.value = "2px";
    nt.setAttributeNode(atr);
    for (let i = 0; i < 20; i++) {
        var np2 = document.createElement('tr');
        nt.appendChild(np2);   
        for (let is = 0; is < 20; is++) {
            var np3 = document.createElement('td');
            var text = document.createTextNode("HOLA");
            np3.appendChild(text);
            np2.appendChild(np3);   
        } 
    }
    document.getElementsByTagName("body")[0].appendChild(nt);
}