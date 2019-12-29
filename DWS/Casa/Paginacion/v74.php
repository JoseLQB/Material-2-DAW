<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php 
    try{
        $conn = new PDO("mysql:host=localhost; dbname=dwes", "root", "");
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $conn->exec("SET CHARACTER SET UTF8");
        $tamano_paginas=3;

        //Este bloque se ejecuta solo cuado pulsemos una página.
        if(isset($_GET["pagina"])){

            if($_GET["pagina"]==1){
                header("Location:v74.php");
            }else{
                $pagina=$_GET["pagina"];
            }
        //La primera carga de página solo ejecutara esto
        }else{
            $pagina=1;
        }

        $empezar_desde=($pagina-1)*$tamano_paginas;
        //Total, esta consulta solo es para hacer los cálculos necesarios
        $sql ="SELECT nombre_corto, cod, PVP FROM producto WHERE familia = 'CONSOL'";
        //Usamos sentencia preparada
        $resultado = $conn->prepare($sql);
        $resultado->execute(array());
        //contar las filas
        $num_filas = $resultado->rowCount();//cuenta los registros
        $total_paginas = ceil($num_filas/$tamano_paginas);//ceil redondea, calcula cuanttas páginas vamos a tener
        echo "Numero de registros de la consulta: ".$num_filas . "<br>";
        echo "Mostramos " . $tamano_paginas . " registros por pagina<br>";
        echo "Mostrando la pagina " . $pagina . " de " .$total_paginas . ".<br>";

        $resultado->closeCursor();
        
        $sql_limite="SELECT nombre_corto, cod, PVP FROM producto WHERE familia = 'CONSOL' LIMIT $empezar_desde, $tamano_paginas";
        //limit muestra de posición n a la n
        $resultado = $conn->prepare($sql_limite);
        $resultado->execute(array());
        while($registro=$resultado->fetch(PDO::FETCH_ASSOC)){
            echo "Nombre: " . $registro["nombre_corto"] . " Código: ". $registro["cod"] . " Precio: " .$registro["PVP"]."<br>";
        }
    }catch(Exception $e){
        echo "Error: " . $e->getLine();
    }
    //-------------------------------PAGINACIÓN---------------------------------------------

    for ($i=1; $i <=$total_paginas ; $i++) { 
        echo '<a href="?pagina='.$i . '">' . $i. "</a>  ";
        //<a href="?pagina=2">el número que pulsemos. El dato viaja a la url bajo el nombre de variable página 
    }

    ?>
    <a href=""></a>
</body>
</html>