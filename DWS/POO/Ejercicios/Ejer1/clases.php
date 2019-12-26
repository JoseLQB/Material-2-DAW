<?php 

class Animal{
    private $nombre;
    private $sexo;

    public function __construct($nom, $sex){
        $this->nombre = $nom;
        $this->sexo = $sex;   
    }

    public function getNombre(){
        return $this->nombre;
    }
    public function getSexo(){
        return $this->sexo;
    }
}
/* -------------------------------------------------------------------------------  */

class Ave extends Animal{

    public function getEspecie(){
        $this->especie = "Ave";
    }

    public function vuela(){
        echo "volando, volando";
    }

    public function hacerNido(){
        echo '<img src="https://www.perlesandco.es/images/1454273850-full/im-Nido-de-paja-a-decorar-16-cm-Brun-x1.jpg">';
    }

}
/* -------------------------------------------------------------------------------  */

class Mamifero extends Animal{

    public function getEspecie(){
        $this->especie = "Mamifero";
    }

    public function salta(){
        echo "salto, salto, salto";
    }
    public function canta(){
        echo "no sé hacer hacer eso";
    }
}
/* -------------------------------------------------------------------------------  */

class Gato extends Mamifero{
    public function araña(){
        echo '<img src="https://t1.ea.ltmcdn.com/es/images/9/5/7/img_mi_gato_me_muerde_y_me_arana_que_hago_20759_paso_2_600.jpg">';

    }
    public function canta(){
        echo "miau, miau, miau";
    }

    public function duerme(){
        echo '<img src="https://www.hogarmania.com/archivos/201707/gato-dormido-668x400x80xX.jpg">';

    }
}

/* -------------------------------------------------------------------------------  */

class Perro extends Mamifero{
    public function muerde(){
        echo 'grrrrrrrrrrrrrrrrrr';

    }
    public function canta(){
        echo "guau, guau, guau";
    }

    public function duerme(){
        echo '<img src="https://soyunperro.com/wp-content/uploads/2017/10/perro-de-lado-dormido.jpg">';

    }
}

/* -------------------------------------------------------------------------------  */

class Canario extends Ave{
    public function vuela(){
        echo 'primero déjame salir de la jaula';

    }
    public function canta(){
        echo "piiiiiiiii, pio, pio, piiiiiiii, pio, pio";
    }

    public function duerme(){
        echo '<img src="http://4.bp.blogspot.com/-kvUAU32MEQA/U4-10SMwlVI/AAAAAAAABU0/BduTcKFNIEA/s1600/canarios.jpg">';

    }
}

/* -------------------------------------------------------------------------------  */

class Pinguino extends Ave{
    public function vuela(){
        echo 'lo intento pero no me sale';

    }
    public function canta(){
        echo "kue, kue";
    }

    public function deslizate(){
        echo '<img src="https://1.bp.blogspot.com/-956-0gUQyzk/VucVNwxUUUI/AAAAAAAAIZo/V56BjYgV8XEpI2cSTrkKnUY-GXFrTcKHw/s320/86.gif">';

    }
}

/* -------------------------------------------------------------------------------  */

class Lagarto extends Animal{
    public function repta(){
        echo 'me subo por la pared';

    }
    public function canta(){
        echo "...";
    }
    public function come(){
        echo "solo si es un mosquito";
    }
}


?>