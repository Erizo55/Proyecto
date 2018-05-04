-- Creamos la base de datos
CREATE DATABASE DBproyectodaw DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish_ci;
USE EMRDBdepartamentos;
-- Creamos las tablas
CREATE TABLE DBproyectodaw.alumno (
idAlumno VARCHAR( 3 ) NOT NULL PRIMARY KEY ,
nombre VARCHAR( 250 ) UNIQUE NOT NULL ,
apellidos VARCHAR( 250 ) UNIQUE NOT NULL ,
fecha_nacimiento VARCHAR( 250 ) UNIQUE NOT NULL ,
correo_electronico VARCHAR( 250 ) UNIQUE NOT NULL ,
usuario VARCHAR( 250 ) UNIQUE NOT NULL ,
contraseña VARCHAR( 250 ) UNIQUE NOT NULL ,
poblacion VARCHAR( 250 ) UNIQUE NOT NULL ,
) ENGINE = INNODB;

CREATE TABLE DBproyectodaw.profesor (
idProfesor VARCHAR( 8 ) PRIMARY KEY ,
nombre VARCHAR( 25 ) UNIQUE NOT NULL  ,
apellidos VARCHAR( 255 ) NOT NULL ,
perfil VARCHAR( 15 )
) ENGINE = INNODB;

CREATE USER 'admindb'
IDENTIFIED BY 'paso';

GRANT ALL ON DBproyectodaw.* TO usuario; 
