CREATE DATABASE 'practica5'; 

CREATE TABLE 'usuario' (
 'id' int(11) NOT NULL AUTO_INCREMENT,
 'usuario' varchar(50) COLLATE utf8_spanish_ci NOT NULL,
 'pwd' varchar(100) COLLATE utf8_spanish_ci NOT NULL,
 'email' varchar(50) COLLATE utf8_spanish_ci NOT NULL,
 'rol' varchar(50) COLLATE utf8_spanish_ci NOT NULL,
 PRIMARY KEY ('id')
) ENGINE=InnoDB AUTO_INCREMENT=106 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
