<?php 
    include("juego2.php");
    session_start();
    $juego = $_SESSION["juego"];

  

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php 
    echo "<br>El juego es ",  $juego->getNombre();
    echo "<br>El autor es ", $juego->getAutor();
    
    
    
    //Con serialize
    
    echo "<hr>";
    $guarda = serialize($juego);
    var_dump($guarda);
    $juego2 = unserialize($guarda);
    echo "<br><br><b>Esto es juego2: </b>";
    echo "<br>El juego es ",  $juego2->getNombre();
    echo "<br>El autor es ", $juego2->getAutor();
  
    ?>
</body>
</html>