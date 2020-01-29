$(document).ready(function () {  
    $("body").append("<p>Este es el </p>")
    $("p").append("<em>contenido</em>");
    $("p").append(" de mi párrafo."); 
    var para =$("<p>"); 
    var txt1= "Hola, soy un texto ";
    para.append(txt1);
    var enfasis = $("<em>");
    var txt2= "buenas noches ";
    enfasis.append(txt2);
    para.append(enfasis);
    var txt3= "hasta luego. ";
    para.append(txt3);
    $("#testdiv").append(para)
});

