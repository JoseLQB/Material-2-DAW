<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="styles/styles.css">
</head>
<body>

    <?php 
    
    session_start();//rescatamos la sesión de la otra página
    if(!isset($_SESSION["usuario"])){
        header("location:login.php");
    }
    ?>
    <div id ="listado">
    <h1>Hola<?php echo " " .$_SESSION["usuario"]. " ";?> puedes empezar tu compra</h1>

    <?php 
    include("conexion.php");
    $listado = $conn->query("SELECT * FROM producto");
    $registros = $listado->fetchAll(PDO::FETCH_OBJ);
    ?>
    <table>
        <tr>
            <th>Producto</th>
            <th>Precio</th>
            <td></td>
        </tr>

        <?php 
        foreach($registros as $k){
            $a = $k->nombre_corto;
            $b = $k->cod;
            $c = $k->descripcion;
            $d = $k->PVP;
        ?>
        <form action="" method="post">
        <tr>
            <td><?php echo $a?><input type="hidden" name="aoculto" value="<?php echo $a?>"></td>
            <input type="hidden" name="boculto" value="<?php echo $b?>">
            <td><?php echo $d?><input type="hidden" name="doculto" value="<?php echo $d?>"></td>
            <td><input type="submit" name="añadir" value="añadir"></td>
        </tr>
        </form>
    
        <?php 
        }
        ?>
    </table>
    </div>
    <div id="cest">
        <?php
        if(isset($_POST["añadir"])){

           //Se crea la sesión que controla la cesta:
            $nombre = $_POST["aoculto"];
            $precio = $_POST["doculto"];

            if(isset($_SESSION["cesta"])){
                $cesta = $_SESSION["cesta"];
            }else{
                $cesta = array();
            }
            array_push($cesta, $nombre, $precio);
            $_SESSION["cesta"] = $cesta;
       
        if(isset($_SESSION["cesta"])){

            echo "<h3>Cesta de la compra</h3>";
            ?>
            <table>
            <?php
            //var_dump($cesta);
            $total = 0;
            $cont = 0;
            for($i=0; $i<sizeof($cesta); $i++){
                if($i%2==0){
                    echo "<tr><td>" . $cesta[$i] ."</td>";
                    $cont++;
                }else{
                    echo "<td>".$cesta[$i]."</td></tr>";
                    $total = $total + $cesta[$i];
                }
            }
            ?></table><?php
            echo "<br><hr>Número de productos: ".$cont. "  " . "Total a pagar: " .$total;
            ?>
            <br><br><a href="cesta.php"><input type="button" value="Resumen de compra"></a>
            
            <?php  
        

        }
        }

        ?>
            <form action="" method="post">
            <br><a href="logoff.php"><input type="button" value="Cerrar Sesion"></a>
                <input type="submit" value="Vacíar Cesta" name="vacia">
                <?php 
                if(isset($_POST["vacia"])){
                    $_SESSION["cesta"]=[];
                }
                
                ?>
            </form>
        <br><br><br>
        </div>

</body>
</html>