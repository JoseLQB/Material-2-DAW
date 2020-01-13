
--

-- Base de datos: pizzeria

--

CREATE DATABASE pizzeria;
USE pizzeria;


-- --------------------------------------------------------



--

-- Estructura de tabla para la tabla oferta

--



CREATE TABLE IF NOT EXISTS oferta (

  id int(11) NOT NULL AUTO_INCREMENT,

  titulo varchar(200) COLLATE utf8_bin NOT NULL,

  imagen varchar(100) COLLATE utf8_bin NOT NULL,

  descripcion varchar(500) COLLATE utf8_bin NOT NULL,

  PRIMARY KEY (id)

) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=17 ;



--

-- Volcado de datos para la tabla oferta

--



INSERT INTO oferta (id, titulo, imagen, descripcion) VALUES

(3, 'Bebida gratis pidiendo dos pizzas', 'pizza3.jpg', 'Pidiendo dos pizzas de cualquier tipo te regalamos dos bebidas (no incluye bebidas alcohólicas de alta graduación).'),

(15, 'Oferta de la semana: Funghi a mitad de precio', 'pizza1.jpg', 'Durante esta semana todas las pizzas funghi de tamaño mediano y familiar están a mitad de precio.'),

(16, 'Albahaca gratis en cualquier pizza', 'pizza2.jpg', 'Al encargar cualquier pizza puedes pedir que le añadamos albahaca ¡totalmente gratis!');



