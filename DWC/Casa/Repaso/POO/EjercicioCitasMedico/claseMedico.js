class Medico extends Person{
    constructor(nombre, apellido, dni, numero){
        super(nombre, apellido, dni);
        this.numeroDeAfiliacion = numero;
    }
}