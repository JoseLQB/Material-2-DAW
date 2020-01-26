$(document).ready(function(){
    $(document).click(function(){
        $("[href='SImod.html']").css("font-style", "italic");
        $("ul:first").css("background-color", "orange");
        $('ul:first > li').eq(2).next(['p']).find('a').css({fontSize:'33px'});
        $('ul:first > li').eq(2).nextAll(['p']).find('a').css({background:'red'});
        $('a[href]').css({marginLeft: "100px"});
        $('a').not('a[href]').css({color: "green"});
        $('a[href*="mod"]').css({marginLeft: "200px"});
        $('a[href^="mod"]').css({color: "purple"});
        $('a[href$=".html"]').css({color: "white"});
        $('ul>li>ul').find('li:contains(horas)').css({color:'hotpink'});
        $('*:empty').text('Nodo Vacío');

    })
})
   

