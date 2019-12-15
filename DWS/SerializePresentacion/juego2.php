<?php 
    //Creamos la clase juego
    class Juego{
        private $nombre;
        private $autor;
        private $genero;
        private $compañia;
        //Constructor
        public function __construct($nombre, $autor, $genero, $compañia){
            $this->nombre=$nombre;
            $this->autor=$autor;
            $this->genero=$genero;
            $this->compañia=$compañia;
        }

        public function getNombre(){
            echo $this->nombre;
        }
        public function getAutor(){
            echo $this->autor;
        }
        public function getGenero(){
            echo $this->genero;
        }

        public function getCompañia(){
            echo $this->compañia;
        }

    }

?>