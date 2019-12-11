<?php 
    class Coche{
        private $ruedas; //Esta variable solo es accesible desde la propia
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
 
    class Camion extends Coche{
        
        public $ruedas;
        public $color;
        public $motor;

        function Camion(){
            $this->ruedas=8;
            $this->color="Gris";
            $this->motor=2600;
        }
        function establecerColor($color, $nombre_camion){///Sobreescribe el método anterior
            $this->color=$color;
            echo "El color del ". $nombre_camion . " es: " . $this->color."<br>";
        }
        function arrancar(){
            parent::arrancar();//Ejecuta el método de la clase padre
            echo "Camión arrancado. ";//Establece una función nuevo a la clase camión
        }

    }
?>