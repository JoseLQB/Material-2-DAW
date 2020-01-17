window.onload=iniciar;
function iniciar(){
    document.getElementById("ok").addEventListener("click", checkCookie, false);
   // document.getElementById("nombre").addEventListener("blur", checkCookie, false);
}

function setCookie(cname, cvalue, exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays*24*60*60*1000));
    var expires = "expires="+ d.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
  
}
function getCookie(cname){
    var name = cname + "=";
    var decodedCookie = decodeURIComponent(document.cookie);
    var ca = decodedCookie.split(';');
    for(var i = 0; i <ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}



function checkCookie() {
    var nombre = document.getElementById("nombre").value;
    var username = getCookie(nombre);
    if (username != "") {
        alert("Hola " + username);
    } else {
        var nombre = document.getElementById("nombre").value;	 
        var numero = document.getElementById("numero").value;
        var cafe = document.getElementById("cafe").value;
        var info = nombre + "-" + numero + "-" + cafe; 
        if (nombre != "" && nombre != null) {
            var confirmar = confirm(nombre + " su café es " + cafe+ ". ¿Estás de acuerdo?");
                if(confirmar = true){
                    setCookie(nombre, info, 365);
                    var c = document.getElementById("cookie");
                    c.innerHTML = "Hola " + nombre + "<br>Hay una tarifa especial para su " + cafe;
                }else{
                    alert("Vuelve a hacerlo desde el principio.");
                }
            }
            
        }
    }
