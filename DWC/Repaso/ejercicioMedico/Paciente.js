class Paciente extends Persona{
    constructor(nombre, apellido, dni, numeroPaciente){
        super(nombre, apellido, dni);
        this.numeroPaciente = numeroPaciente;
    }
}