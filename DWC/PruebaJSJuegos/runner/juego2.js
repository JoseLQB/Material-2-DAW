$(document).ready(function () {
    $("button").bind("click", function () {
        //$("div").animate({fontSize: "140em",},2500);
        var pos = pos + 10;
        $("#azul").animate({ left: suma() + "px", }, 1000);

    })
});


function suma(){
    $('#incrementa').click(function () {
        var i = 10;
        if (i < 20) {
            i++;
        } else if (i = i++) {
            i = 0;
        }
    })
    alert(i);
}