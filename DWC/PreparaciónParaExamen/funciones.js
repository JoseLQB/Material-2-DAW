//Hora en el título
function hora(){
    var hour = new Date();
    document.title(hour.toLocaleTimeString());
}
//Devuelve la edad dada una fecha de nacimiento en formato(dd/mm/dd)
function cEdad(fechaC){
    var fechaCumple = fechaC.split("/");
    var fechaC_date = new Date(fechaCumple[2], fechaCumple[1] - 1, fechaCumple[0]);
    var ageDifMs = Date.now() - fechaC_date.getTime();
    var ageDate = new Date(ageDifMs);
    return Math.abs(ageDate.getUTCFullYear() - 1970);
}

//Muestra en una ventana nueva
function nuevaVentana (cadena){
    var left = (screen.width/2)-(75+10);
    var arriba = (screen.height/2)-(100-50);
    var abrir = window.open('','Nueva',"width=200,height=200,left="+left+",top="+arriba+"'");         
    abrir.document.write('<title>Datos</title>'+cadena);  
}
var nuevaVentana = (cadena)=>{
    var left = (screen.width/2)-(75+10);
    var arriba = (screen.height/2)-(100-50);
    var abrir = window.open('','Nueva',"width=200,height=200,left="+left+",top="+arriba+"'");         
    abrir.document.write('<title>Datos</title>'+cadena);  
}

//Cuenta atrás desde N hasta 0
var contador =10; ///Variable desde la que se quiera hacer la cuenta hasta 0
var fin = function(){
contador--;
console.log(contador);
if(contador == 0){
    console.log("Estás muerto")
    clearInterval(intervalo);
    }
}
//setTimeout(final, 3000);
//var intervalo = setInterval(fin, 1000);

//Cuenta atrás desde N hasta 0 en una ventana nueva;
var contador =10; 
var fin = function(){
contador--;
//var y = nuevaVentana(contador +"<br>");
if(contador == 0){
    y = nuevaVentana("Estás muerto");
    clearInterval(intervalo);
    }
}
//var intervalo = (setInterval(fin, 1000));

//Filtrar edad
var menorEdad=(arr)=>{
    var may = [];
    for(var i = 0; i<arr.length; i++){
        if((arr[i][1])<18){//Cambiar el indice dependiendo del que contenga la edad o poner <=18 para los mayores
            may.push(arr[i]);
        }
    }
    return(may);//Crea un nuevo array con los menores
}
//Filtrar edad calculando con cEdad a partir de una fecha
var menorEdad=(arr)=>{
    var may = [];
    for(var i = 0; i<arr.length; i++){
        if(cEdad(arr[i][3])<18){  ///El indice se debe cambiar
            may.push(arr[i]);
        }
    }
    return(may);//Crea un nuevo array con los menores
}
//Validar con una expresión regular
function literal(m) { 
    var expreg = /^[A-Z]{1,2}\s\d{4}\s([B-D]|[F-H]|[J-N]|[P-T]|[V-Z]){3}$/gi;//Cambiar REGEX
    if(expreg.test(m)){
        alert("Correcto"); //return true
    }else{ 
        alert("Incorrecto"); //return false
    }
} 
//Busca un elemento en una array y devuelve su posición
function buscar(arr, num){
    let i =0;
    let count =arr.length;
    while(i<count){
        if(arr[i]==num){
            return i;
        }
        i++;
    }
    return null;
}
//var a = [1, "juan", 5, 33];

//Funciones para ordenar
function orderTiempo(a, b){
    return a.tiempo-b.tiempo;
}

function orderNombre( a, b ) {
    if (a.piloto.nombre < b.piloto.nombre ){
        return -1;
    }
    if (a.piloto.nombre > b.piloto.nombre){
        return 1;
    }
    return 0;
}

function orderPorlosdos(a,b){
    if(a.tiempo != b.tiempo){
        return a.tiempo-b.tiempo;
    }else{
        if (a.piloto.nombre < b.piloto.nombre ){
            return -1;
        }
        if (a.piloto.nombre > b.piloto.nombre){
            return 1;
        }
    return 0;
    }
}
//arrayClasif.sort(orderPorlosdos);