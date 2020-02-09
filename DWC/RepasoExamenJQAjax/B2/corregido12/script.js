$(document).ready(function () {
   /*let json =   [{src:"/img/img1.jpg", desc: "descripcion1", specs: ["spec11", "spec12"]},
                {src:"/img/img2.jpg", desc: "descripcion2", specs: ["spec21", "spec22"]}];
    
     */   
        $.ajax({
            type: "post",
            url: 'aux2.php', 
            error(xhr,status,error){console.log("nope");
            },
            success:  function (data) {  
                var json = JSON.parse(data);

                let div = $("<div>");
                let titulo = $("<h1>").text("Subtituloo");
                div.append(titulo);
                let lista =  $("<ul>");
                json.forEach(element => {
                    let elmlista =  $("<li>");
                    let img = $("<img>");
                    img.attr("id", element.src);
                    elmlista.append(img);
                    let desc =  $("<p>").text(element.desc);
                    elmlista.append(desc);
                    let lista2 =  $("<ul>");
                    element.specs.forEach(element2 => {
                        let elmlista2 =  $("<li>").text(element2);
                        lista2.append(elmlista2);                
                    });
                    elmlista.append(lista2);                
                    lista.append(elmlista); 
                });      
                div.append(lista);
                $(".contenedor").append(div);



            }
        });  
       /* let div = $("<div>");
        let titulo = $("<h1>").text("Subtituloo");
        div.append(titulo);
        let lista =  $("<ul>");
        json.forEach(element => {
            let elmlista =  $("<li>");
            let img = $("<img>");
            img.attr("id", element.src);
            elmlista.append(img);
            let desc =  $("<p>").text(element.desc);
            elmlista.append(desc);
            let lista2 =  $("<ul>");
            element.specs.forEach(element2 => {
                let elmlista2 =  $("<li>").text(element2);
                lista2.append(elmlista2);                
            });
            elmlista.append(lista2);                
            lista.append(elmlista); 
        });      
        div.append(lista);
        $(".contenedor").append(div);*/
});