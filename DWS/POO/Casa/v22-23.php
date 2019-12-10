<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php 
    //Creando una clase
    class Coche{
        public $ruedas;
        public $color;
        public $motor;

        function Coche(){//constructor
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
    }
    //Instancia de clases
    $renault = new Coche();
    $tesla = new Coche();
    $seat = new Coche();

    $renault->girar();

    echo $renault->ruedas;

    ?>
</body>
</html>