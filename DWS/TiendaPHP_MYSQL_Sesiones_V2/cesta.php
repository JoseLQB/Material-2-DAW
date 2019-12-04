<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="styles/styles.css">
</head>
<body>
    <?php 
    
    session_start();
    if(!isset($_SESSION["usuario"])){
        header("location:login.php");
    }else{
        ?>
        <form action="pagar.php" method="post">
        <?php
        echo "<h2>RESUMEN DE LA COMPRA</h2><hr>";
        $cesta =$_SESSION["cesta"];
        ?>
            <table>
            <?php
            $total = 0;
            $cont = 0;
            for($i=0; $i<sizeof($cesta); $i++){
                if($i%2==0){
                    $cont = $cont + 1;
                    echo "<tr><td>" . $cesta[$i] ."</td>";
                }else{
                    echo "<td>".$cesta[$i]."</td></tr>";
                    $total = $total + $cesta[$i];
                }
            }
            echo "<tr><td>Número de productos: ".$cont . "</td><td>Total a pagar: " .$total , "</td></tr>";
            ?></table><?php
    }
    ?>
    <br><hr><input type="submit" value="Proceder al pago">
    <br><br><br><a href="logoff.php"><input type="button" value="Cerrar Sesion"></a>
    </form>
</body>
</html>