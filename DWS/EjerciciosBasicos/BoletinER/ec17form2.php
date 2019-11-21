<?php
    $numero = $_POST["numero"];
    $arr = str_split($numero);
    echo $numero . " tiene " .sizeof($arr) . " cifras.";
?>