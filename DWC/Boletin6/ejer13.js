window.onload = inicio;
function inicio(){
    creandoForm();
    document.getElementById("boton").addEventListener("click", validaEdad, false);    
    document.getElementById("boton").addEventListener("click", mayusculas, false);    
    document.getElementById("div1").addEventListener("click", holaCaja, false);    
    document.getElementById("boton").addEventListener("click", botonJson, false);   
}

function creandoForm(){
    var div1 = document.createElement("div");
    div1.setAttribute("id", "div1");
    var formu = document.createElement("form");
    formu.setAttribute("method", "post");
    formu.setAttribute("action", "#");
    div1.appendChild(formu);
    var inputName = document.createElement("input");
    inputName.setAttribute("type", "text");
    inputName.setAttribute("id", "name");
    formu.appendChild(inputName);
    var textN = document.createTextNode("Nombre");
    formu.appendChild(textN);

    var salto = document.createElement("br");
    formu.appendChild(salto);
    var salto2 = document.createElement("br");
    formu.appendChild(salto2);

    var inputApellido = document.createElement("input");
    inputApellido.setAttribute("type", "text");
    inputApellido.setAttribute("id", "apellido");
    formu.appendChild(inputApellido);
    var textN = document.createTextNode("Apellido");
    formu.appendChild(textN);

    
    var salto3 = document.createElement("br");
    formu.appendChild(salto3);  
    var salto4 = document.createElement("br");
    formu.appendChild(salto4);

    var inputEdad = document.createElement("input");
    inputEdad.setAttribute("type", "number");
    inputEdad.setAttribute("id", "edad");
    formu.appendChild(inputEdad);
    var textN2 = document.createTextNode("Edad");
    formu.appendChild(textN2);

    var confEdad = document.createElement("span");
    formu.appendChild(confEdad);
    confEdad.setAttribute("id", "ok");

    
    var salto5 = document.createElement("br");
    formu.appendChild(salto5);  
    var salto6 = document.createElement("br");
    formu.appendChild(salto6);
    
    var textArea = document.createElement("textarea");
    textArea.setAttribute("id", "textArea");
    textArea.setAttribute("cols", "50");
    textArea.setAttribute("rows", "5");
    formu.appendChild(textArea);
    
    var salto7 = document.createElement("br");
    formu.appendChild(salto7);  
    var salto8 = document.createElement("br");
    formu.appendChild(salto8);

    var inputBoton = document.createElement("input");
    inputBoton.setAttribute("type", "button");
    inputBoton.setAttribute("id", "boton");
    inputBoton.setAttribute("value", "aceptar");
    formu.appendChild(inputBoton);

    document.getElementsByTagName("body")[0].appendChild(div1);

}

function validaEdad(){
    var edad = document.getElementById("edad").value;
    var confirma = document.getElementById("ok");
    if(edad>18){
        confirma.innerHTML = "<span style='color:green;'>Eres mayor</span>";
    }else{
        confirma.innerHTML ="<span style='color:red;'>Eres menor</span>";
    }
}

function mayusculas(){
    var nombre = document.getElementById("name").value;
    var apellido = document.getElementById("apellido").value;

    document.getElementById("name").value= nombre.toUpperCase();///ojo
    document.getElementById("apellido").value= apellido.toUpperCase();
    
}

function holaCaja(){
    var caja = document.getElementById("textArea").value;
    document.getElementById("textArea").value = caja.innerHTML = "¡¡Hola Mundo!!";
}

function botonJson(){
    var jotason = [
        {src:"/img/img1.jpg", desc: "descripcion1", specs: ["spec11", "spec12"]},
        {src:"/img/img2.jpg", desc: "descripcion2", specs: ["spec21", "spec22"]},
        {src:"/img/img3.jpg", desc: "descripcion3", specs: ["spec31", "spec32"]},
        {src:"/img/img4.jpg", desc: "descripcion4", specs: ["spec41", "spec42"]},
    ];
    var edad = document.getElementById("edad").value;
    if(edad>18){
        //alert("hola");
        var divNuevo = document.createElement("div");
        divNuevo.setAttribute("id", "divNuevo");
        var lista = document.createElement("ol");
        divNuevo.appendChild(lista);
        lista.setAttribute("id", "ol");
        for (let i = 0; i < jotason.length; i++) {
            var li = document.createElement("li");
            lista.appendChild(li);
            var contenido1 = document.createTextNode(jotason[i].desc);
            li.appendChild(contenido1);
            
        }
        var botonDel = document.createElement("input");
        botonDel.setAttribute("type", "button");
        botonDel.setAttribute("value", "Borrar Lista");
        botonDel.setAttribute("id", "delete");
        divNuevo.appendChild(botonDel);



        document.getElementsByTagName("body")[0].appendChild(divNuevo);
      
        
        document.getElementById("delete").addEventListener("click", borrarLista, false); 
    }
}

function borrarLista(){
    var c = confirm("Se borrará la lista");
        if(c == true){    
            var elemento = document.getElementById("divNuevo");
            while(elemento.firstChild){
                elemento.removeChild(elemento.firstChild);
            }

    }
}
    
    
