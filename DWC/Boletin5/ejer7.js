/*Crear un formulario con los botones de opción que representan
diferentes colores. Utilice el atributo id para cada botón de radio.
Cambiar el fondo del formulario al color seleccionado.
 */
window.onload = iniciar;
function iniciar(){
    document.getElementById("ro").addEventListener("change", cambiarColor, false);
    document.getElementById("ve").addEventListener("change", cambiarColor, false);
    document.getElementById("az").addEventListener("change", cambiarColor, false);
    document.getElementById("am").addEventListener("change", cambiarColor, false);
}

function cambiarColor(){
    var x =  document.getElementById("ro").value;
    var a =  document.getElementById("ve").value;
    var d =  document.getElementById("az").value;
    var c =  document.getElementById("am").value;
    var arr = [x, a, d, c];

    for (let i = 0; i < arr.length; i++) {
        if(this.value == arr[i]){
            var b = document.getElementById("formulario");
            b.style.backgroundColor = arr[i];   
        }
    }
   
    
}
