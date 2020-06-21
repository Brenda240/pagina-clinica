create database pagina
DEFAULT CHARACTER SET utf8;

use pagina;

create table usuarios (
	id INT NOT NULL UNIQUE AUTO_INCREMENT,
	nombre varchar(30) NOT NULL,
	apellido varchar(30) NOT NULL,
	telefono int(20) NOT NULL,
	email varchar(50) NOT NULL,
	password VARCHAR(255) NOT NULL,
	PRIMARY KEY(id)
);

CREATE TABLE agendar (
        id INT NOT NULL UNIQUE AUTO_INCREMENT,
        nombre_id INT NOT NULL,
        nombre varchar(30) NOT NULL,
	apellido varchar(30) NOT NULL,
	telefono int(20) NOT NULL,
        PRIMARY KEY(id),
        FOREIGN KEY(nombre_id)
            REFERENCES usuarios(id)
            ON UPDATE CASCADE
            ON DELETE RESTRICT
);


        
        