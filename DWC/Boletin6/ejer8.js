window.onload=inicio;
function inicio(){
    ejer8();
}

function ejer8(){     
    var jotason = [
        {src:"/img/img1.jpg", desc: "descripcion1", specs: ["spec11", "spec12"]},
        {src:"/img/img2.jpg", desc: "descripcion2", specs: ["spec21", "spec22"]},
        {src:"/img/img3.jpg", desc: "descripcion3", specs: ["spec31", "spec32"]},
        {src:"/img/img4.jpg", desc: "descripcion4", specs: ["spec41", "spec42"]},
    ];

    var creaDiv = document.createElement("div");
    var creaH1 = document.createElement("h1");
    creaDiv.appendChild(creaH1);
    var texto1 = document.createTextNode("Subtitulo");
    creaH1.appendChild(texto1);

    for (let i = 0; i < jotason.length; i++) {
        var creaUl = document.createElement("ul");
        creaDiv.appendChild(creaUl);

        var creaLi = document.createElement("li");
        creaUl.appendChild(creaLi);
        var creaImg = document.createElement("img");
        creaLi.appendChild(creaImg);
        creaImg.setAttribute("src", jotason[i].src)  
    
        var creaP1 = document.createElement("p");
        creaLi.appendChild(creaP1);
        var dato1 = document.createTextNode(jotason[i].desc);
        creaP1.appendChild(dato1);
        creaUl2 = document.createElement("ul");
        creaLi.appendChild(creaUl2);
        creaUl2.setAttribute("class", "specs");
        var creaLi2 = document.createElement("li");
        creaUl2.appendChild(creaLi2);
        var dato2 = document.createTextNode(jotason[i].specs[0]);
        creaLi2.appendChild(dato2);
        var creaLi3 = document.createElement("li");
        creaUl2.appendChild(creaLi3);
        var dato3 = document.createTextNode(jotason[i].specs[1]);
        creaLi3.appendChild(dato3);
    }
    document.getElementsByTagName("body")[0].appendChild(creaDiv);
}


