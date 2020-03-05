class Medico extends Persona{
    constructor(nombre, apellido, dni, numeroMedico){
        super(nombre, apellido, dni);
        this.numeroMedico = numeroMedico;
    }
}