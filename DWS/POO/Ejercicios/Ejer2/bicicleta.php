<?php
    include("vehiculo.php");

    class Bicicleta extends Vehiculo{
        
        public function andaBici($km){
            echo "Ando " . $km . " kilometros";
        }

        public function caballito($km){
            echo "Un caballito durante " . $km . " kilómetros.";
        }

    }
/**public function anda($k) {
    echo "Voy a recorrer " . $k . " km. <br>Ti-ti-ri-ti-ti-ti-ri<br>";
    parent::incrementaKm($k);
    echo "Ya he recorrido " . $this->getKmRecorridos() . " kilómetros";
  }
  
  public function haceCaballito() {
    echo "Ahí voy!!! Yuuuujuuuuuuuuu";
  }
}
© 2020 GitH */

?>