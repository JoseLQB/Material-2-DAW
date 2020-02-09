$(document).ready(function () {
    var jotason = [
        {src:"/img/img1.jpg", desc: "descripcion1", specs: ["spec11", "spec12"]},
        {src:"/img/img2.jpg", desc: "descripcion2", specs: ["spec21", "spec22"]},
        {src:"/img/img3.jpg", desc: "descripcion3", specs: ["spec31", "spec32"]},
        {src:"/img/img4.jpg", desc: "descripcion4", specs: ["spec41", "spec42"]},
    ];

    $("body").append("<div id='Todos los viajes'></div>")
    $("div").append("<ul>");


    for(var i = 0; i<jotason.length; i++){
        var src = jotason[i].src;
        var desc = jotason[i].desc;
        var spects = jotason[i].specs;
        var imagen = $("<img>");
        var parrafo = $("<p>").text(desc);
        imagen.attr("src", src);
        let contenido1 = $("<li>").append(imagen).append(parrafo);
        let lista = $("<ul class='specs'></ul>");
        contenido1.append(lista);   
        for (let j = 0; j < spects.length; j++) {
            let lista2 = $("<li>"+ spects[j] +"</li>");        
            lista.append(lista2); 
        }
        $("ul:first").append(contenido1);
        //Ejercicio 13
        $("ul:first>li").attr("class", "viaje");
        $("p").attr("style", "display:none")
    }
    $("img").hover(function (ev) {
        $("p").slideDown("slow").toggle();
            
        }
    );
});