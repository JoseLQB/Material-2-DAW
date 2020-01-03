///Ver todas las citas///

function verTodasCitas(arrCitas){
    arrCitas.forEach(e => {
        document.write(e.fecha + "<br>");    
    });
}

///Eliminar una cita////

function eliminaCita(nombreCita, arrCitas){
    arrCitas.forEach(e => {
        if(e == nombreCita){
            document.write("Se eliminará la cita del paciente " + e.Paciente.nombre + " " + e.Paciente.apellido);
            ///Eliminar sí|no///
        } 
    });
}

///Buscar una cita////

function buscaCita(nombrePaciente, arrCitas){
    arrCitas.forEach(e=>{
        if(e.Paciente.nombre == nombrePaciente){
            document.write("<br>Cita: " + e.Paciente.nombre + " " + e.Paciente.apellido + " " + e.fecha);
        }else{
            document.write("----");
        }
    });
}

///Ordenar citas por fecha////
function ordenaCitas(arrCitas){
    arrCitas.sort(function(a, b){
        return a.fecha.getTime()-b.fecha.getTime()
    });
}
