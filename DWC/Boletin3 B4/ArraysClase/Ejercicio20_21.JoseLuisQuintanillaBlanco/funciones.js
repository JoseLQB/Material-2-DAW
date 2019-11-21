//Ejercicio 20
function cEdad(fechaC){/*Calcula la edad a partir de la fecha*/
    var fechaCumple = fechaC.split("/");
    var fechaC_date = new Date(fechaCumple[2], fechaCumple[1] - 1, fechaCumple[0]);
    var ageDifMs = Date.now() - fechaC_date.getTime();
    var ageDate = new Date(ageDifMs);
    return Math.abs(ageDate.getUTCFullYear() - 1970);
}
function mostrarTodos(arr){
    var muestra = "";
    var muestra = "";
    for(var i =0; i<arr.length; i++){
        muestra = muestra + "<br><br>Nombre: " + arr[i][0] + "<br>Apellidos: " 
            + arr[i][1] + "<br>DNI: " + arr[i][2] + "<br>Edad: " + cEdad(arr[i][3]);
    }
    return muestra;
}
function buscarPorApellido(ap){
    var busqueda = "";
    for(var i =0; i<personas.length; i++){
        if(personas[i][1]==ap){
            busqueda = busqueda + "<br><br>Nombre: " + personas[i][0] + "<br>Apellidos: " 
                    + personas[i][1] + "<br>DNI: " + personas[i][2] + "<br>Edad " + personas[i][3];
        }
    }
    return busqueda;
}
function buscarPorDni(dn){
    var busqueda = "";
    for(var i =0; i<personas.length; i++){
        if(personas[i][2]==dn){
            busqueda = busqueda + "<br><br>Nombre: " + personas[i][0] + "<br>Apellidos: " 
                + personas[i][1] + "<br>DNI: " + personas[i][2] + "<br>Edad " + personas[i][3];
        }
    }
    return busqueda;
}
function buscarPorEdad(ed){
    var busqueda = "";
    for(var i =0; i<personas.length; i++){
        var edad = cEdad(personas[i][3]);
        if(edad==ed){
        busqueda = busqueda + "<br><br>Nombre: " + personas[i][0] + "<br>Apellidos: " 
            + personas[i][1] + "<br>DNI: " + personas[i][2] + "<br>Edad " + personas[i][3];
        }
    }
    return busqueda;
}     

//Ejercicio 21

//Filtrar mayores de edad
var mayorEdad=()=>{
    var may = "";
    for(var i = 111; i>=18; i--){
        may = may + buscarPorEdad(i);
    }
    return(may);
}
//Filtrar menores de edad
var menorEdad=(arr)=>{
    var may = [];
    for(var i = 0; i<arr.length; i++){
        if(cEdad(arr[i][3])<18){
            may.push(arr[i]);
        }
    }
    return(may);//Crea un nuevo array con los menores
}
//Modificar datos
var modificaDatos= (dato, dni, nw)=>{
    if(dato == "nombre"){
        for(i=0; i<personas.length; i++){
            if(personas[i][2]==dni){
                personas[i][0] = nw;
            }
        }
    }else if(dato == "apellido"){
        for(i=0; i<personas.length; i++){
            if(personas[i][2]==dni){
                personas[i][1] = nw;
            }
        }
    }else if(dato == "dni"){
        for(i=0; i<personas.length; i++){
            if(personas[i][2]==dni){
                personas[i][2] = nw;
            }
        }
    }else if(dato == "fecha"){
        for(i=0; i<personas.length; i++){
            if(personas[i][2]==dni){
                personas[i][3] = nw;
            }
        }
    }
}

//Eliminar un usuario, devuelve una array donde se excluye al usuario que se quiere eliminar
var eliminaUsuario=(arr, dni)=>{
    var newArr = [];
    for(i=0; i<arr.length; i++){ 
        if(arr[i][2]!=dni){
            newArr.push(arr[i]);
        }
    }
    arr = newArr;
    return arr;            
}
//Mostrar en nueva ventana
function nuevaVentana (cadena){
    var left = (screen.width/2)-(75+10);
    var arriba = (screen.height/2)-(100-50);
    var abrir = window.open('','Nueva',"width=200,height=200,left="+left+",top="+arriba+"'");         
    abrir.document.write('<title>Datos</title>'+cadena);  
}