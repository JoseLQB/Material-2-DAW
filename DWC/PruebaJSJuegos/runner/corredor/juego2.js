$(document).ready(function(){
    var i = 10;
    var j = 10;
    $(document).bind("keyup", function(event) { 
        var key = (event.keyCode ? event.keyCode : event.which); 
        if (key =="81"){ 
            if(i<500){
                i=i+20;
            }else{
                i = alert("Jugador 1, has ganado");
            }
            $("#azul").css({ left: i + "px", }, 1000);
        }else if (key == "80"){
            if(j<500){
                j=j+20;
            }else{
                j = alert("Jugador 2, has ganado");
            }
            $("#rojo").css({ left: j + "px", }, 1000);
        }
    }); 

})