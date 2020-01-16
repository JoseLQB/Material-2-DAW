window.onload = inicio;

function inicio(){
    creando3Parrafos();
    document.getElementById("div0").addEventListener("click", eliminaParrafo, false);    
    document.getElementById("div1").addEventListener("click", eliminaParrafo1, false);    
    document.getElementById("div2").addEventListener("click", eliminaParrafo2, false);    
}

function creando3Parrafos(){

    for (let i = 0; i < 3; i++) {
        var creaDiv = document.createElement("div");

        var parrafo = document.createElement("p");
        parrafo.setAttribute("id", "div" + i);
        var texto = document.createTextNode("Este texto se repetirá en cada párrafo");
        var salto1 = document.createElement("br");
        creaDiv.appendChild(parrafo);
        parrafo.appendChild(texto);
       // parrafo.appendChild(salto1);
        var linea2 = document.createTextNode("Esta es la segunda línea del texto" + i + i + i);
        parrafo.appendChild(linea2);
        document.getElementsByTagName("body")[0].appendChild(creaDiv);
    }
}

function eliminaParrafo(){
   /* var divD = document.getElementById("div0");
    divD.removeChild(divD.childNodes[0]);*/
    
    var botD = document.getElementById("div0");
    botD.remove();
    var input = document.createElement("input");
    input.setAttribute("type", "button");
    input.setAttribute("value", "Vuelve");
    input.setAttribute("id", "vuelve");
    document.getElementsByTagName("div")[0].appendChild(input); 
    document.getElementById("vuelve").addEventListener("click", inicio, false);   

}
function eliminaParrafo1(){
    /**var divD = document.getElementById("div1");
    divD.removeChild(divD.childNodes[0]);*/
    
    var input = document.createElement("input");
    input.setAttribute("type", "button");
    input.setAttribute("value", "Vuelve");
   // input.setAttribute("id", "Vuelve");
    document.getElementsByTagName("div")[1].appendChild(input); 
    //document.getElementById("div2").addEventListener("click", eliminaParrafo2, false);   
}
function eliminaParrafo2(){
    var divD = document.getElementById("div2");
    divD.removeChild(divD.childNodes[0]);
    var input = document.createElement("input");
    input.setAttribute("type", "button");
    input.setAttribute("value", "Vuelve");
    //input.setAttribute("id", "Vuelve");
    document.getElementsByTagName("div")[2].appendChild(input); 
    //document.getElementById("div2").addEventListener("click", eliminaParrafo2, false);   
}

function vuelveParrafo(){

    var parrafo = document.createElement("p");
    parrafo.setAttribute("id", "div" + 0);
    
    var texto = document.createTextNode("Este texto se repetirá en cada párrafo");
    var salto1 = document.createElement("br");
    parrafo.appendChild(texto);
    //parrafo.appendChild(salto1);
    var linea2 = document.createTextNode("Esta es la segunda línea del texto000"/* + i + i + i*/);
    parrafo.appendChild(linea2);
    document.getElementsByTagName("div")[0].appendChild(parrafo);

    var botD = document.getElementById("vuelve");
    botD.remove();

}