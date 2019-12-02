function check() {
    var q1 = document.cuestionario.q1.value;
    var q2 = document.cuestionario.q2.value;
    var okey = 0;

    if(q1 == "ladra"){
        okey++;
    }
    if(q2 == "maulla"){
        okey++;
    }
    if(okey ==2){
        alert("Has ganado");
    }else{
        alert("Sigue intentándolo");
    }
}