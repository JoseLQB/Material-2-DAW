$(document).ready(function () {

    /*let json = [{src:"/img/img1.jpg", desc: "descripcion1", specs: ["spec11", "spec12", "spec13"]},
                {src:"/img/img2.jpg", desc: "descripcion2", specs: ["spec21", "spec22"]}];*/

    

    $.ajax({
        type: "post",
        url: "prueba.php",
        success: function (data) {
            var json = JSON.parse(data);
            $("body").append("<h1>Subtitulo</h1>"); 
            var ul1 = $("<ul>");
            $("body").append(ul1);
            json.forEach(i => {
                var li1 = $("<li>"); 
                var img = $("<img>");
                img.attr("src", i.src);
                $("ul:first").append(li1);//ul:first para que no se añadan al ul que se crea después
                li1.append(img);
                var parrafo = $("<p>").text(i.desc);
                li1.append(parrafo);
                var ul2 = $("<ul>");
                ul2.attr("class", "specs");
                li1.append(ul2);
                    i.specs.forEach(j=>{
                        var li2 = $("<li>").text(j);
                        ul2.append(li2);
                    });
            });
        
        
        
            //Ejercicio 13
            ///Se añade la clase viaje y se desliza al pasar por encima
            $("ul:first>li").attr("class", "viaje");
            $("ul:first>li>p").attr("style", "display:none");
            $("img").hover(function (e) { 
                $(e.currentTarget).next("p").slideDown();
            });
            ocultaDesc();
            specsOc();
            destacada();
        
            /*
            $("img").hover(function () {
                    $("ul:first>li>p").slideDown();
                }
            );*/
        }
    });

});

var ocultaDesc=()=> { 
    $("p").mousemove(function (e) { 
        $(e.currentTarget).fadeOut(5000);
    });
}

var specsOc=()=>{// aparece y desaparece al clickar
    $("p").click(function (e) { 
        $(e.currentTarget).next(".specs").slideToggle();
    });
}
var destacada =() =>{
    $(".specs>li").click(function(e){
        $(e.currentTarget).attr("class", "destacado");
    })
}