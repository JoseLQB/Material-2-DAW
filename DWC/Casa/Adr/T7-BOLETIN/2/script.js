$(document).ready(function () {
    //Tittle
    var titulo =$("<tittle>").text("Ejercicio 2"); 
    $("head").append(titulo);  
    //H1
    var cabecera =$("<h1>").text("Este es el Titulo"); 
    $("body").append(cabecera);
    //P
    var parrafo =$("<p>").text("En este parrafo ");

    var enlace1 =$("<a>").text("hay enlaces");
    enlace1.attr("href","index.html");
    parrafo.append(enlace1);
    parrafo.append(" entre ");

    var enlace2 =$("<a>").text("el texto");
    enlace2.attr("href","index.html");

    parrafo.append(enlace2);
    parrafo.append(" por que ");

    var enlace3 =$("<a>").text("asi lo pide");
    enlace3.attr("href","index.html");

    parrafo.append(enlace3);
    parrafo.append(" el ejercicio.");

     $("body").append(parrafo);      // Append the new elements
});