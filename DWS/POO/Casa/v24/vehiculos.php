<?php 
    class Coche{
        public $ruedas;
        public $color;
        public $motor;

        function Coche(){
            $this->ruedas=4;
            $this->color="";
            $this->motor=1600;
        }

        function arrancar(){
            echo "Arrancando<br>";
        }
        function frenar(){
            echo "Girando<br>";
        }
        function girar(){
            echo "Frenando<br>";
        }
        function establecerColor($color, $nombre_coche){
            $this->color=$color;
            echo "El color del ". $nombre_coche . " es: " . $this->color."<br>";
        }
    }
/*------------------------------------------------------------------------------------*/
 
    class Camion{
        public $ruedas;
        public $color;
        public $motor;

        function Coche(){
            $this->ruedas=8;
            $this->color="Gris";
            $this->motor=2600;
        }

        function arrancar(){
            echo "Arrancando<br>";
        }
        function frenar(){
            echo "Girando<br>";
        }
        function girar(){
            echo "Frenando<br>";
        }
    }
?>