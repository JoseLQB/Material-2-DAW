window.onload=iniciar;
function iniciar(){
    ejer2();
}

function ejer2(){
    var np = document.createElement('p');
    var nT = document.createTextNode('Este es el');
    var np2 = document.createElement('em');
    var nT2 = document.createTextNode(' contenido ');
    var nT3 = document.createTextNode('De mi parrafo');

    np.appendChild(nT);
    document.getElementsByTagName("body")[0].appendChild(np);

    np2.appendChild(nT2);
    document.getElementsByTagName("p")[0].appendChild(np2);

    np.appendChild(nT3);
    document.getElementsByTagName("body")[0].appendChild(np);
}