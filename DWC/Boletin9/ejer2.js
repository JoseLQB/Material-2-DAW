$(document).ready(function () {
    $("body").append("<h1>Texto texto</h1>");
    var parrafo =$("<p>").text("Párrafo, párrafo ");
    var enlace1 =$("<a>").text(" enlace ");
    enlace1.attr("href","#");
    parrafo.append(enlace1);
    parrafo.append(" entre ");
    var enlace2 =$("<a>").text("más texto");
    enlace2.attr("href","#");
    parrafo.append(enlace2);
    parrafo.append(" holaaaa ");
    var enlace3 =$("<a>").text(" sí, no");
    enlace3.attr("href","#");
    parrafo.append(enlace3);
    parrafo.append(" adiós!!");
     $("body").append(parrafo);   
});