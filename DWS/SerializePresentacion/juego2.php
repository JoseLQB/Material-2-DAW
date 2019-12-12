<?php 
    class Juego{
        private $nombre;
        private $autor;
        private $genero;
        private $compañia;

        public function Juego(){
            $this->nombre = "Death Stranding";
            $this->autor = "Kojima";
            $this->genero = "Accion";
            $this->compañia = "Kojima Productions";
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