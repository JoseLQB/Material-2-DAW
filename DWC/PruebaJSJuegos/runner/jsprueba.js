$(document).ready(function(){
    var i = 10;
    var i = 10;
    $(document).keydown(function(event) { 
        var key = (event.keyCode ? event.keyCode : event.which); 
        if (key =="68"){ 
            if(i<50000){
                i=i+20;
            }else{
              
            }
            $("#azul").css({ left: i + "px", }, 1000);
        }else if (key == "65"){
            if(i<500000){
                i=i-20;
            }else{

            }
            $("#azul").css({ left: i + "px", }, 1000);
        }
    }); 

})