$(document).ready(function(){
    $("input").focus(function(){
        $(this).css("background-color", "black");
    });
    $("input").blur(function(){
        $(this).css("background-color", "white");
    });
});