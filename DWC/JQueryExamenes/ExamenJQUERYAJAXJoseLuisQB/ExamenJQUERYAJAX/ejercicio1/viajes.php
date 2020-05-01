<?php

// Declaramos un array de Partidos
    $arrViajes = array(
		0 => array("clase_pais" => "usa", 
				"ciudad_h2" => "New York, New York",
				"detalle_precio_total" => "1,899",
				"detalle_num_noches" => 7,
				"precio_noche" => 275,
				"ruta_imagen" => "./photos/newyork.jpg",
				"pie_imagen" => "Puente de Brooklyn"
				),
		1 => array("clase_pais" => "paris", 
				"ciudad_h2" => "Paris, Francia",
				"detalle_precio_total" => "1,499",
				"detalle_num_noches" => 5,
				"precio_noche" => 300,
				"ruta_imagen" => "./photos/paris.jpg",
				"pie_imagen" => "Notre Dame de Paris"
				),
		2 => array("clase_pais" => "uk", 
				"ciudad_h2" => "Londres, Reino Unido",
				"detalle_precio_total" => "2,199",
				"detalle_num_noches" => 5,
				"precio_noche" => 440,
				"ruta_imagen" => "./photos/london.jpg",
				"pie_imagen" => "Torre de Londres"
				),
		);
		
	echo json_encode($arrViajes);
?>