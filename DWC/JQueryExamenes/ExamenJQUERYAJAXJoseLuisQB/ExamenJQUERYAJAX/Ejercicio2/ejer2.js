$(document).ready(function () {
    $('#btn').click(function(){
        $.ajax({
            type: "POST",
            url: "ejer2.php",
            data: $("#formulario").serialize(),
            success: function (data) {
                $('#resp').html(data);
                ///Lo envía al PHP y para comprobar que va bien he puesto que
                //se muestre en el HTML
            }
        });
    });

});
