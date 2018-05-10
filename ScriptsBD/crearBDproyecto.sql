-- Creamos la base de datos
CREATE DATABASE DBproyectodaw DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish_ci;

USE DBproyectodaw;
-- Creamos las tablas

CREATE TABLE DBproyectodaw.usuario (
idUsuario VARCHAR( 10 ) NOT NULL PRIMARY KEY ,
descUsuario VARCHAR( 25 ) UNIQUE NOT NULL ,
password VARCHAR( 70 ) NOT NULL ,
perfil VARCHAR( 25 ) NOT NULL,
ultimaConexion DATETIME NULL
) ENGINE = INNODB;

CREATE TABLE DBproyectodaw.alumno (
idAlumno INT( 3 ) NOT NULL PRIMARY KEY AUTO_INCREMENT,
nombre VARCHAR( 25 ) NOT NULL ,
apellidos VARCHAR( 50 ) NOT NULL ,
fecha_nacimiento DATETIME NOT NULL ,
correo_electronico VARCHAR( 250 ) UNIQUE NOT NULL ,
idUsuario VARCHAR( 10 )
) ENGINE = INNODB;

CREATE TABLE DBproyectodaw.profesor (
idProfesor INT( 3 ) NOT NULL PRIMARY KEY AUTO_INCREMENT,
nombre VARCHAR( 25 ) NOT NULL  ,
apellidos VARCHAR( 50 ) NOT NULL ,
fecha_nacimiento DATETIME  NOT NULL ,
correo_electronico VARCHAR( 50 ) UNIQUE NOT NULL ,
idUsuario VARCHAR( 10 )
) ENGINE = INNODB;

CREATE TABLE DBproyectodaw.curso (
idCurso VARCHAR( 4 ) NOT NULL PRIMARY KEY ,
nombre VARCHAR( 50 ) NOT NULL  ,
idProfesor INT( 3 ) 
) ENGINE = INNODB;

CREATE TABLE DBproyectodaw.asignatura (
idAsignatura VARCHAR( 4 ) NOT NULL PRIMARY KEY ,
nombre VARCHAR( 50 ) UNIQUE NOT NULL ,
idProfesor INT( 3 ) 
) ENGINE = INNODB;

CREATE TABLE DBproyectodaw.trabajo (
idTrabajo INT( 3 ) NOT NULL PRIMARY KEY AUTO_INCREMENT ,
descTrabajo VARCHAR( 25 ) NOT NULL  ,
idAlumno INT( 3 ) ,
idAsignatura VARCHAR( 4 ) ,
nota INT(2) ,
fecha_limite DATETIME NULL 
) ENGINE = INNODB;

CREATE TABLE DBproyectodaw.matricula (
idMatricula INT( 10 ) NOT NULL PRIMARY KEY AUTO_INCREMENT,
idAlumno INT( 3 ) ,
idCurso VARCHAR( 4 )
) ENGINE = INNODB;

CREATE TABLE DBproyectodaw.cursoAsignaturas (
idCursoAsignaturas INT( 10 ) NOT NULL PRIMARY KEY AUTO_INCREMENT,
idCurso VARCHAR( 4 ) ,
idAsignatura VARCHAR( 4 ) 
) ENGINE = INNODB;

CREATE INDEX idUsuario
ON alumno (idUsuario);

CREATE INDEX idUsuario
ON profesor (idUsuario);

CREATE INDEX idProfesor
ON curso (idProfesor);

CREATE INDEX idProfesor
ON asignatura (idProfesor);

CREATE INDEX idAlumno
ON trabajo (idAlumno);

CREATE INDEX idAsignatura
ON trabajo (idAsignatura);

CREATE INDEX idAlumno
ON matricula (idAlumno);

CREATE INDEX idCurso
ON matricula (idCurso);

CREATE INDEX idCurso
ON cursoAsignaturas (idCurso);

CREATE INDEX idAsignatura
ON cursoAsignaturas (idAsignatura);
