function verTodaCita(arrCitas) {
    arrCitas.forEach(e => {
        document.write(e.fecha + "<br>");
    });
}

function verTodaCita(arrCitas) {
    arrCitas.forEach(e => {
        document.write(e.fecha + "<br>");
    });
}

function nuevaCita(cita, array){
    array.push(cita);
}

function eliminarCita(ncita, array){
    for (let i = 0; i < array.length; i++) {    
        if(array[i]==ncita){
            array.splice(i, 1);
        } 
    }
}

function buscaCita(nombrePaciente, array){
    for (let i = 0; i < array.length; i++) {
        if(array[i].Paciente.nombre == nombrePaciente){
            document.write("La cita del paciente " + nombrePaciente + " es el día " + array[i].fecha);
        }  
    }
}

function ordenaCitas(array){
    array.sort(function(a, b){
        return a.fecha.getTime()- b.fecha.getTime();
    });
}

function eliminaNombre(nombre, array){
    for (let i = 0; i < array.length; i++) {   
        if(array[i].Paciente.nombre == nombre){
            array.splice(i, 1);
        }     
    }
}



//Muestra el contenido de un array en ventana nueva y se va cerrando cada 4 segundos para abrir otra {}
function abrirVentanas(cad) {
    var width = window.innerWidth ? window.innerWidth : document.documentElement.clientWidth ? document.documentElement.clientWidth : screen.width;
    var height = window.innerHeight ? window.innerHeight : document.documentElement.clientHeight ? document.documentElement.clientHeight : screen.height;

    var systemZoom = width / window.screen.availWidth;
    var left = (width - 300) / 2 / systemZoom;
    var top = (height - 400) / 2 / systemZoom;

    let abrir = window.open('','Boom',"width=300,height=400,left="+left+",top="+top+"'");    
    abrir.document.write('Nombre: '+cad);  
    /////Para cerrarla
    setTimeout(function(){
        abrir.close()
    } , 4000);        
}

function mostrar(array, veces=0) { ///Veces se modificara para mostrar a partir de
    if (veces<array.length){
        console.log('entra');
        abrirVentanas(array[veces]);
        setTimeout(function(){
            mostrar(array, veces+1)
        }, 4000); 
    }
}