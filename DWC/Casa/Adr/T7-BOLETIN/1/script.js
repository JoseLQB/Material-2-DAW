$(document).ready(function () {
    //  <p>Este es el <em>contenido</em> de mi párrafo.</p>

    var txt2 = $("<em></em>").text("contenido");   // Create with jQuery
    var txt3 =$("<p></p>").text("Este es el "); 
    $("body").append(txt3); 
    $("p").append(txt2); 
    $("p").append(" de mi párrafo."); 
         // Append the new elements
});