$(document).ready(function(){
    $("p").hover(function(){
        $(".show").text("Hola");
    }, function(){
        $(".show").text("Adios");
    });
});
