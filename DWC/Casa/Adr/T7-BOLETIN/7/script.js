$(document).ready(function () {
    let enlace = $("<a>").text("Esto es un enlace");

    enlace.attr("href", "index.html");
    enlace.attr("class", "enlaces");
    enlace.attr("id", "enlace");
    $("body").append(enlace); 

    let caja = $("<div>");
    caja.text("Direccion: "+$("#enlace").attr("href")+", Class: "+$("#enlace").attr("class")+", ID: "+$("#enlace").attr("id")+".")
    $("body").append(caja); 

});