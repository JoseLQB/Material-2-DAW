$(document).ready(function () {

    $.ajax({
        type: "post",
        url: "ejer.php",
        success: function (data) {
            var json = JSON.parse(data);
            $("body").attr("id", "body");
            var hache1 = $("<h1>").text("OCULTAR JUGUETES");
            $("body").append(hache1);
            var creaDiv1 = $("<div>");
            $("body").append(creaDiv1);
            var creaUl1 = $("<ul>");
            creaUl1.attr("style", "list-style-type: none");
            creaDiv1.append(creaUl1);
            json.forEach(i => {
                var creaLi1 = $("<li>");
                creaUl1.append(creaLi1);
                creaDiv2 = $("<div>");
                creaDiv2.attr("class", "left-block");
                creaLi1.append(creaDiv2);
                var creaIMG = $("<img>");
                creaIMG.attr("src", i.img);
                creaIMG.attr("title", i.title);
                creaDiv2.append(creaIMG);
                var creaDiv3 = $("<div>");
                creaDiv3.attr("class", "desc");
                creaDiv3.attr("style", "display:none");
                creaDiv2.append(creaDiv3);
                var creaDiv4 = $("<div>");
                creaDiv4.attr("class", "content_price");
                creaDiv4.text(i.precio);
                creaDiv3.append(creaDiv4);
                var creaA = $("<a>").attr("href", i.href).text(i.coleccion);
                creaDiv3.append(creaA);
                var creaP = $("<p>").attr("class", "product-desc").text(i.ref);
                creaDiv3.append(creaP);
            });
            oclultar();
            mostrarInfo();
            cambiaTitle()
        }
    });
    
});
function cambiaTitle(){
    $("h1").eq(0).click(function(){
        if($("h1:first").attr("id")=="h1"){
            $("h1:first").text("OCULTAR JUGUETES").attr("id", "h0").attr("style", "color:red");
        }else{
            $("h1:first").text("MOSTRAR JUGUETES").attr("id", "h1").attr("style", "color:green");

        }
    })
}
function oclultar(){
    var nh1 = $("<h1>").text("MOSTRAR JUGUETES");
    nh1.attr("style", "display:none");
    $("body").append(nh1);
    $("h1").click(function(){
        $("div:first").slideToggle();
        if($("<h1>").css("display")=="none"){
            $("<h1>").css("display")=="block";
        }else{
            $("<h1>").css("display")=="none";

        }
    })
}



function mostrarInfo(){
    $("img").click(function(e) {
        if($(e.currentTarget).next(".desc").css("display")=="none"){
            $(e.currentTarget).next(".desc").slideDown();;   
        }else{
            $(e.currentTarget).next(".desc").slideUp();;  
        }  
    })
}
