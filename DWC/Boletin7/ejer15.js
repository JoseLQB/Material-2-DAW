$(document).ready(function(){
    $("input").click(function(){
        $("div").animate(
            {
                left: "250px",
                width: "150px",
                height: "150px"
            }
        ,2500)
    })
});
