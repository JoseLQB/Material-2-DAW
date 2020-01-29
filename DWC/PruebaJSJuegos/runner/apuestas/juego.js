$(document).ready(function(){ 
    $("input").click(function(){
        //$("div").animate({fontSize: "140em",},2500);
        var vAzul = velocidad(1,5)*1000;
        var vRojo = velocidad(1,5)*1000;
        var vVerde = velocidad(1,5)*1000;
        var vNaranja = velocidad(1,5)*1000;
        $("#azul").animate({left: "1200",}, vAzul);
        $("#rojo").animate({left: "1200",},vRojo);
        $("#verde").animate({left: "1200",},vVerde);
        $("#naranja").animate({left: "1200",},vNaranja);
        $("body").after("<button>Ver puntuaciones<button/>");        
    })
});


/*$("button").click(function(){
    alert(ganador(vAzul, vRojo, vVerde, vNaranja));
})*/
function velocidad(a,b) {
    return Math.random()*(b-a)+parseInt(a);
}

//Puntuaciones

function ganador(v1, v2, v3, v4){
    var resultados = [v1, v2, v3, v4];
    var may = 0;
    resultados.sort()
    resultados.forEach(e => {
        if(e>may){
            may = e;
        }
    });
    alert(may);
}
