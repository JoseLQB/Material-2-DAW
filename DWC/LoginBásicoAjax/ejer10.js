$(document).ready(function () {
    $('#btn').click(function(){
        $.ajax({
            type: "POST",
            url: "ejer10.php",
            data: $("#formulario").serialize(),
            success: function (data) {
                $('#resp').html(data);
            }
        });
        $("body").append('<input type="button" value="Salir" id="salir">');
        $("#salir").click(function(){
            $("#resp").remove();
        })
    });

});

