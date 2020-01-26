$(document).ready(function(){
    $("#b1").click(function(){
        alert($("p").text());
    });
    $("#b2").click(function(){
        alert($("div").html());
    });
    $("#b3").click(function(){
        alert($("div").val());//Debería ser un input en vez de un p en el html***
    });
    $("#b4").click(function(){
        alert($("a").attr("href"));
    });
});