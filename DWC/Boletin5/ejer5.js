window.onload=iniciar;
function iniciar(){
    document.getElementById("ejer6").addEventListener('input', sms, false);
}


function sms() {  
    var lim = 145;
  //  var car = cara.value.length;
    var msg = document.getElementById("ejer6").value.length;
    var resto = lim - msg;
    document.getElementById("d").innerHTML = resto;
}