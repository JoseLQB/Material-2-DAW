window.onload = inicio;
//Solo me salen en la primera noticia
function inicio(){
    practica();
    var mostrar = document.getElementsByName("mostrar");
    for (let i = 0; i < mostrar.length; i++) {
        mostrar[i].addEventListener("click", muestraNoticias, false);
        
    }
    document.getElementById("2").addEventListener("auxclick", muestraDescripcion, false);

    var oculta = document.getElementsByName("ocultar");
    for (let i = 0; i < oculta.length; i++) {
        oculta[i].addEventListener("click", ocultaNoticias, false);
        
    }
}


var jotason = [
    {titular: "Noticia 1",	contenido: "Contenido de la noticia 1",descripcion: "Esta es la noticia 1"},
    {titular: "Noticia 2",contenido: "Contenido de la noticia 2",descripcion: "Esta es la noticia 2"},
    {titular: "Noticia 3",contenido: "Contenido de la noticia 3",descripcion: "Esta es la noticia 3"}
];

function practica(){
    
    for (let i = 0; i < jotason.length; i++) {
        var creaDiv = document.createElement("div");
        creaDiv.setAttribute("id", "noticia" + i);
        var creaH1 = document.createElement("h1");
        creaDiv.appendChild(creaH1);
        var creaText1 = document.createTextNode(jotason[i].titular);
        creaH1.appendChild(creaText1);
        var creaIMG = document.createElement("img");
        creaIMG.setAttribute("name", "mostrar");
        creaIMG.setAttribute("src", "https://www.carreraspormontana.com/images/sites/2/2012/12/add_128px_517035_easyicon.net_.png")
        creaDiv.appendChild(creaIMG);


        var creaIMG2 = document.createElement("img");
        creaIMG2.setAttribute("name", "ocultar");
        creaIMG2.setAttribute("src", "https://cdn.icon-icons.com/icons2/1380/PNG/128/vcsconflicting_93497.png")
        creaDiv.appendChild(creaIMG2);

        var creaP = document.createElement("p");
        creaP.setAttribute("style", "display:none;");
        creaP.setAttribute("id", "2");
        var creaText2 = document.createTextNode(jotason[i].contenido);
        creaP.appendChild(creaText2);
        creaDiv.appendChild(creaP);

        var creaH4 = document.createElement("h4");
        creaH4.setAttribute("style", "display:none;");
        creaH4.setAttribute("id", "1");
        creaDiv.appendChild(creaH4);
        var creaText3 = document.createTextNode(jotason[i].descripcion);
        creaH4.appendChild(creaText3);

        document.getElementsByTagName("body")[0].appendChild(creaDiv);
              
    }

}

function muestraNoticias(e){
   e.currentTarget.parentNode.childNodes[3].style.display = "block";////////<====
    //document.getElementById("2").style.display = "block";  
}

function muestraDescripcion(){

    if(document.getElementById("1").style.display = "none"){
        document.getElementById("1").style.display = "block";  

    }else if(document.getElementById("2").style.display = "block"){
        document.getElementById("2").style.display = "none";       
    }

}

function ocultaNoticias(){
    document.getElementById("1").style.display = "none";  
    document.getElementById("2").style.display = "none";  
}

