window.onload=iniciar;
function iniciar(){
    document.getElementById("ok").addEventListener('click', check, false);
}

function check() {
    var q1 = document.cuestionario.q1.value;
    var q2 = document.cuestionario.q2.value;
    var q3 = document.cuestionario.q3.value;
    var q4 = document.cuestionario.q4.value;
    var okey = 0;

    if(q1 == "ladra"){
        okey++;
    }
    if(q2 == "maulla"){
        okey++;
    }
    if(q3 == "arpegios"){
        okey++;
    }
    if(q4 == "cuatro"){
        okey++;
    }
    if(okey ==2){
        alert("Has acertado 2 de 4");
    }else if(okey == 3){
        alert("Has acertado 3 de 4");
    }else if(okey == 1){
        alert("Has acertado 1 de 4");
    }else if(okey == 4){
        alert("Has acertado todas, felicidades");
    }else if(okey == 0){
        alert("No has acetado ninguna");
    }
}