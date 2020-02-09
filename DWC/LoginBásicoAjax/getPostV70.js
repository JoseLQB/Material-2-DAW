$(document).ready(function () {
    $("login").submit(function () { 
        var datosFormulario = {nombre:$("#usuario").val(),
                                apellido:$("#apellido").val()}
        $.get("getPost.php", datosFormulario, procesaDatos);
    });
});