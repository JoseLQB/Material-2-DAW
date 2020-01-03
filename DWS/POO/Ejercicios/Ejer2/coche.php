<?php
    include("vehiculo.php");

    class Cohce extends Vehiculo{
        
        public function quemaRueda($km){
            echo "Has estado quemando rueda durante " . $km . " kilometros";
        }

    }

?>