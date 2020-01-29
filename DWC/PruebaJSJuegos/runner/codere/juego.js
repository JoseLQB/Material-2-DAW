$(document).ready(function(){ 
    $(".button").click(function(){
        //Sector 1
        $(".button").hide();
        var vAzul = velocidad(3,7)*1000;
        var vRojo = velocidad(3,7)*1000;
        var vVerde = velocidad(3,7)*1000;
        var vNaranja = velocidad(3,7)*1000;
        $("#azul").animate({left: "150",}, vAzul);
        $("#rojo").animate({left: "150",},vRojo);
        $("#verde").animate({left: "150",},vVerde);
        $("#naranja").animate({left: "150",},vNaranja);
        //Sector 2
        var vAzul = velocidad(2,4)*1000;
        var vRojo = velocidad(2,4)*1000;
        var vVerde = velocidad(2,4)*1000;
        var vNaranja = velocidad(2,4)*1000;
        $("#azul").animate({left: "500",}, vAzul);
        $("#rojo").animate({left: "500",},vRojo);
        $("#verde").animate({left: "500",},vVerde);
        $("#naranja").animate({left: "500",},vNaranja);
        //Sector 3
        var vAzul = velocidad(1, 3)*1000;
        var vRojo = velocidad(1, 3)*1000;
        var vVerde = velocidad(1, 3)*1000;
        var vNaranja = velocidad(1, 3)*1000;
        $("#azul").animate({left: "1100",}, vAzul);
        $("#rojo").animate({left: "1100",},vRojo);
        $("#verde").animate({left: "1100",},vVerde);
        $("#naranja").animate({left: "1100",},vNaranja);  
    })
   // setTimeout(ganador, 6000, "vAzul", "vRojo", "vVerde", "vNaranja");
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
    //var may = 0;
    resultados.sort()
    alert(resultados);
}
