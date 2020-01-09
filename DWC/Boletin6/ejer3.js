window.onload=iniciar;
function iniciar(){
    ejer3();
}

function ejer3(){
    var np  = document.createElement('ul');
    var np2 = document.createElement('li');
    var nT  = document.createTextNode('Coche1');
    np2.appendChild(nT);
    np.appendChild(np2);

    var np3 = document.createElement('li');
    var np4 = document.createElement('li');
    var nT2 = document.createTextNode('Coche2');
    var nT3 = document.createTextNode('Coche3');

    np3.appendChild(nT2);
    np.appendChild(np3);

    np4.appendChild(nT3);
    np.appendChild(np4);

    document.getElementsByTagName("body")[0].appendChild(np);
   
}