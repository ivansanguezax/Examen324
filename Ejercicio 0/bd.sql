CREATE DATABASE MIBASEIVAN;

USE MIBASEIVAN;

CREATE TABLE INSCRIPCION (
    id_Inscripcion int NOT NULL,
    CI_estudiante int  NOT NULL,
    sigla varchar(10)  NOT NULL,
    nota1 int  NOT NULL,
    nota2 int  NOT NULL,
    nota3 int  NOT NULL,
    notaFinal int  NOT NULL,
    CONSTRAINT INSCRIPCION_pk PRIMARY KEY (id_Inscripcion)
);

CREATE TABLE PERSONA (
    CI int  NOT NULL,
    nombre_Completo varchar(45)  NOT NULL,
    fecha_De_Nacimiento date  NOT NULL,
    telefono varchar(45)  NOT NULL,
    departamento varchar(2)  NOT NULL,
    CONSTRAINT PERSONA_pk PRIMARY KEY (CI)
);

CREATE TABLE USUARIO (
    CI int  NOT NULL,
    usuario varchar(45)  NOT NULL,
    password varchar(45)  NOT NULL,
    CONSTRAINT USUARIO_pk PRIMARY KEY (CI)
);

ALTER TABLE USUARIO 
ADD COLUMN rol VARCHAR(45) NOT NULL