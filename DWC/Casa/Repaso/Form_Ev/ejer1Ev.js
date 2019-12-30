window.onload = iniciar;

function iniciar(){
    document.getElementById("az").addEventListener("click", pintarAzul);
    document.getElementById("ro").addEventListener("mouseover", pintarRojo);
    document.getElementById("ve").addEventListener("dblclick", pintarVerde);
    document.getElementById("in").addEventListener("input", escribirTexto);
    document.getElementById("bl").addEventListener("mouseover", pintarBlanco);

}

var zContenedor = document.getElementById("contenedor");
var zContadorLetras = 0;	

function pintarAzul(){
    zContenedor.style.backgroundColor = "blue";
}
function pintarRojo(){
    zContenedor.style.backgroundColor = "red";			
}
function pintarVerde(){
    zContenedor.style.backgroundColor = "green";	
}
function escribirTexto(){
    zContadorLetras++;
    zContenedor.innerHTML = zContadorLetras;
    document.getElementById("cont").innerHTML = zContadorLetras;
}
function pintarBlanco(){
    zContenedor.style.backgroundColor = "white";	
}