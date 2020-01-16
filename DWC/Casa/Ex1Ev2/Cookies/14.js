window.addEventListener('load',iniciar, false);
function iniciar() {   
    document.getElementById("nombre").addEventListener('blur',oferta, false);
    document.getElementById("enviar").addEventListener('click',checkCookie, false);
}

function setCookie(cname, cvalue, exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
    var expires = "expires="+d.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
} 

function getCookie(cname) {
    var name = cname + "=";
    var ca = document.cookie.split(';');
    for(var i = 0; i < ca.length; i++) {
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

function oferta() {
    var user = getCookie("username");
    if (user != "") {
      let datos= user.split(",");
      if (datos[0] == document.getElementById("nombre").value) {
        alert("Hola de nuevo " + datos[0]);
        alert("Hay una nueva oferta para el cafe: "+datos[2]);
      }
    }  
}

function checkCookie() {   
        let user= document.getElementById("nombre").value;
        let room= document.getElementById("room").value;
        let cafe= document.getElementById("cafe").value;
        var array=user+','+room+','+cafe;
      if (user!='' && room!='') {
        setCookie("username", array, 365);
      }    
}