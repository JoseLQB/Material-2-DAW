
$(document).ready(function(){
    $("input").click(function(){
      $.ajax({url: "ejer9.php", success: function(result){
        $(".ajax").html(result);
      }});
    });
  });