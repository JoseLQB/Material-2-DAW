$(document).ready(function(){
    $("table").click(function(){
        $("tr:odd").css("background-color","red");
        $("tr:even").css("background-color","blue");
    });
});
