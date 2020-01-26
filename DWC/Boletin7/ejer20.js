$(document).ready(function(){
    $("button").click(function(){
        $("p").text("Texto Añadido");
        $("ul").before("<li>Texto añadido</li>")
        $("p").before("<button>Dale</button>");
    })
})