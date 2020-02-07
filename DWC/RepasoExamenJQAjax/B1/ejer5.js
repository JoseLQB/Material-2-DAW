$(document).ready(function () {
    $("body").append("<h1>Bienvenido</h1>");
    var lista1= $("<ul>").text("Lista 1");
    var lista2= $("<ul>").text("Lista 2");
    lista1.attr("id", "lista1");
    lista2.attr("id", "lista2");
    $("body").append(lista1);
    $("body").append(lista2);
    var elemento1=$("<li>").text("Tortilla");
    var elemento2=$("<li>").text("Jamón");
    var elemento3=$("<li>").text("Queso");
    var elemento4=$("<li>").text("Cocacola");
    var elemento5=$("<li>").text("Leche");
    var elemento6=$("<li>").text("Te");
    $("ul:first").append(elemento1);
    $("ul:first").append(elemento2);
    $("ul:first").append(elemento3);
    $("ul:eq(1)").append(elemento4);
    $("ul:eq(1)").append(elemento5);
    $("ul:eq(1)").append(elemento6);
    //Esto aparecerá a los tres segundos
    /*setTimeout(function(){ ganadores()
    }, 3000);*/
    


});
/*
function ganadores(){
    $("body").append("<h3>Hasta luego</h3>")
}*/