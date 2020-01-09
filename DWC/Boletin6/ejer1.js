window.onload=iniciar;
function iniciar(){
    //alert("hola");
    addbody();
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
