$(document).ready(function(){ 
    $("input").click(function(){
        //$("div").animate({fontSize: "140em",},2500);
        var vAzul = velocidad(1,5)*1000;
        var vRojo = velocidad(1,5)*1000;
        var vVerde = velocidad(1,5)*1000;
        var vNaranja = velocidad(1,5)*1000;
        $("#azul").animate({left: "800px",}, vAzul);
        $("#azul").animate({left: "1600px",}, vVerde);
        $("#rojo").animate({left: "800px",},vRojo);
        $("#verde").animate({left: "800px",},vVerde);
        $("#naranja").animate({left: "800px",},vNaranja);
        //setInterval(ganador(vAzul, vVerde, vRojo, vNaranja), 50000);
    })
});

function velocidad(a,b) {
    return Math.random()*(b-a)+parseInt(a);
}

function ganador(v1, v2, v3, v4){
    var resultados = [v1, v2, v3, v4];
    var may = 0;
    resultados.forEach(e => {
        if(e>may){
            may = e;
        }
    });
    alert(may);
}
