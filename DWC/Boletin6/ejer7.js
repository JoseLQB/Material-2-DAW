window.onload=inicio;
function inicio(){
    creaLink();
    document.getElementById("s").addEventListener("click", pulsar, false);
}

function pulsar(){
    if(!document.getElementById("tabla")){
        creaTabla();
    }else{
        borraTabla();
    }
}

function creaLink(){
    var na = document.createElement("a");
    var atr = document.createAttribute("href");
    atr.value = "#"; 
    na.setAttributeNode(atr);
    var atr2 = document.createAttribute("id");
    atr2.value = "s";
    na.setAttributeNode(atr2);
    var text1 = document.createTextNode("Mostrar ");
    na.appendChild(text1);
    document.getElementsByTagName("body")[0].appendChild(na);
}


function creaTabla(){

    document.getElementById("s").nodeValue
    var nt = document.createElement("table");
    var atr = document.createAttribute("border");
    atr.value = "2px";
    nt.setAttributeNode(atr);
    nt.setAttribute("id", "tabla");
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

function borraTabla(){
    var d = document.createElement("div");
    d.setAttribute("id", "n");
    var del = document.createTextNode(" ");
    d.appendChild(del);
    var borr = document.getElementsByTagName("table")[0];
    var pd = borr.parentNode;
    pd.replaceChild(d, borr);
}