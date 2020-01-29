$(document).ready(function () {
    //  <p>Este es el <em>contenido</em> de mi párrafo.</p>

    var txt2 = $("<em></em>").text("contenido");   // Create with jQuery
    var txt3 =$("<p></p>").text("Este es el "); 
    $("body").append(txt3); 
    $("p").append(txt2); 
    $("p").append(" de mi párrafo."); 
         // Append the new elements
});
$(document).ready(function () {
    var para =$("<p>"); 
    var txt1= "este es el b ";
    para.append(txt1);
    var enfasis = $("<em>");

    var txt2= "esto esta en enfasis ";
    enfasis.append(txt2);

    para.append(enfasis);

    var txt3= "esto es el i ";
    para.append(txt3);
    $("#testdiv").append(para)

});