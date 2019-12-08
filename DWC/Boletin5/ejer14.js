window.onload=iniciar;
function iniciar(){
    document.getElementById("ok").addEventListener("click", checkCookie, false);
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
    var username = getCookie("username");
    if (username != "") {
        alert("Hola " + username);
    } else {
        var nombre = document.getElementById("nombre").value;	 
        var numero = document.getElementById("numero").value;
        var cafe = document.getElementById("cafe").value;
        var info = nombre + "-" + numero + "-" + cafe; 
        if (nombre != "" && nombre != null) {
            setCookie("username", info, 365);
        }
    }
}