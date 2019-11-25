<!DOCTYPE html>
<html>
	<head>
		<title>Prueba</title>
		<meta charset="utf-8">
	</head>
	<body>
    <?php
    /*Conexión y consulta */
		$mysqli = new mysqli('127.0.0.1', 'root', '', 'dwes');
		if ($mysqli->connect_errno) {
	   	 echo "Lo sentimos, este sitio web está experimentando problemas.";
	   	}
	   	else {
	    	$sql = "select nombre from familia where nombre like 'C%' or nombre like 'O%'";
	    	if (!$resultado = $mysqli->query($sql)) {
		    	// ¡Oh, no! La consulta falló. 
		    	echo "Lo sentimos, este sitio web está experimentando problemas.";
		    }


		    echo "<p>Esto son las familias de productos que empiezan por C y por O</p>";
		    
		    while ($familia = $resultado->fetch_assoc()) {
		    	echo $familia['nombre'] . "<br>";
		    }
		   	$resultado->free();
			$mysqli->close();
		    }
	?>
	</body>
</html>