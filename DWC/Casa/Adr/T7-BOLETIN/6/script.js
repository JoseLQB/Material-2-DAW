$(document).ready(function () {

   
    var tabla =$("<table>"); 
    for (let index1 = 0; index1 < 20; index1++) {
        var fila =$("<tr>"); 
        for (let index2 = 0; index2 < 20; index2++) {
            var celda =$("<td>").text(index1+" "+index2);    
            fila.append(celda);   
        }
        tabla.append(fila);
    }
    
    $("body").append(tabla); 

});