$(document).ready(function(){ 
    $("buton").click(function(){
        //$("div").animate({fontSize: "140em",},2500);
        
        $("#azul").animate({left: "800px",},velocidad(1,5)*1000);
        $("#rojo").animate({left: "800px",},velocidad(1,5)*1000);
        $("#verde").animate({left: "800px",},velocidad(1,5)*1000);
        $("#naranja").animate({left: "800px",},velocidad(1,5)*1000);
    })
});

function velocidad(a,b) {
    return Math.random()*(b-a)+parseInt(a);
}

function ganador(){
    if($("div").css("left", "800px")){
        alert("hola");
    }
}
