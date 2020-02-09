$(document).ready(function () {
    $("body").append("<p>Este es el <em>contenido</em> de mi parrafo</p>");
    //Hecho por segunda vez usando eq
    $("body").append("<p>Este es el </p>")
    $("p:eq(1)").append("<em>contenido</em>");
    $("p:eq(1)").append(" de mi párrafo."); 
});