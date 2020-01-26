$(document).ready(function(){
    $("input").click(function(){
        $("a").attr("href", "http://www.google.es/intl/es/earth/index.html");
        $("a").attr("title", "google earth");
        $("a").text("Google Earth");
    })

});