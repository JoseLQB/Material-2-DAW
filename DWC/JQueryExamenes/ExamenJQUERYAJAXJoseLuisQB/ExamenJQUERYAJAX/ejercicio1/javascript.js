$(document).ready(function () {
    $.ajax({
        type: "post",
        url: "viajes.php",
        success: function (data) {
            var json = JSON.parse(data); 
            //alert(json);  
            var div1 = $("<div>");
            div1.attr("id", "todos-los-viajes");
            $("body").append(div1); 
            var ul1 = $("<ul>");
            div1.append(ul1);
            json.forEach(i => {
                var li1 = $("<li>").attr("class", i.clase_pais);
                ul1.append(li1);
                var creaH2 = $("<h2>").text(i.ciudad_h2);
                li1.append(creaH2);
                var creaSpan1 = $("<span>").attr("class", "detalle").text(i.detalle_precio_total + " € por "+ i.detalle_num_noches + " noches");
                li1.append(creaSpan1);
                var creaSpan2 = $("<span>").attr("class", "por-noche");
                var creaSpan3 = $("<span>").attr("class", "precio").text(" " + i.precio_noche + " €");
                creaSpan2.text(" noche");
                li1.append(creaSpan2);
                creaSpan1.append(creaSpan3);
                var creaBoton = $("<button>").attr("class", "reseva").text("¡Resérvalo ya!")
                li1.append(creaBoton);
                var creaUl2 = $("<ul>").attr("class", "fotos");
                li1.append(creaUl2);
                var creali2 = $("<li>");
                creaUl2.append(creali2);
                var creaIMG = $("<img>").attr("src", i.ruta_imagen);
                creali2.append(creaIMG);
                var creaSpan4 = $("<span>").text(i.pie_imagen);
                creali2.append(creaSpan4);
            })
            ///Llamada a funciones
            cambiarClase();
            mostrarInfo();
            reduce();
        }
    });

});
//Ejercicio B  

function cambiarClase(){
    $("img").hover(function (e) { 
        $(e.currentTarget).next("span").attr("class", "por-noche").attr("class", "destacado");  
    });
}

//Ejercicio C
function mostrarInfo(){
    $("img").click(function(e) {
        $(e.currentTarget).next("span").slideToggle();
    })
}


//Ejercicio D

function reduce(){
    $("img").hover(function(e){
        var precio = parseInt($(".precio").text());
        var nuevoPrecio = precio/1.10;
        precio = nuevoPrecio;
        $(".precio").text(precio);
    }, 5000);
}

///Los hover me los coge como clicks