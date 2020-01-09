window.onload=iniciar;
function iniciar(){
    //alert("hola");
    //addbody();
    p2();
}

function addbody(){
    var np = document.createElement('p');
    document.getElementsByTagName("body")[0].appendChild(np);
    var nuevoTexto = document.createTextNode('Antes');
    var e1 = document.createElement('a');
    var nuevoTexto2 = document.createTextNode("DEspues");
    var nuevoTexto3 = document.createTextNode("DEspues2");
    np.appendChild(nuevoTexto);
    np.appendChild(e1);
    np.appendChild(nuevoTexto2);
    np.appendChild(e1);
    np.appendChild(nuevoTexto3);
}

function p2(){
    var p1= document.createElement("p");
    var text1 = document.createTextNode("Primera parte del texto ");
    p1.appendChild(text1);
    
    var a1= document.createElement("a");
    var enlace = document.createTextNode("ENLACE ");
    a1.appendChild(enlace);
    p1.appendChild(a1);

    var text2 = document.createTextNode("Segunda parte del texto ");
    p1.appendChild(text2);

    var a2= document.createElement("a");
    var enlace2 = document.createTextNode("ENLACE2 ");
    a2.appendChild(enlace2);
    p1.appendChild(a2);


    document.getElementsByTagName("body")[0].appendChild(p1);

}
