$(document).ready(function(){
    $("button").click(function(){
        $("p").text("Texto Añadido");
        $("ul").after("<li>Texto añadido</li>")
        $("p").after("<button>Dale</button>");
    })
})