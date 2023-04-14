CREATE DATABASE MIBASEIVAN;

USE MIBASEIVAN;

CREATE TABLE INSCRIPCION (
    CI_estudiante int  NOT NULL,
    sigla varchar(10)  NOT NULL,
    nota_1 int  NOT NULL,
    nota_2 int  NOT NULL,
    nota_3 int  NOT NULL,
    nota_final int  NOT NULL,
    CONSTRAINT INSCRIPCION_IVAN_pk PRIMARY KEY (CI_estudiante)
);

CREATE TABLE PERSONA(
    CI int  NOT NULL,
    nombre_completo varchar(45)  NOT NULL,
    fecha_nacimiento date  NOT NULL,
    telefono varchar(45)  NOT NULL,
    departamento varchar(2)  NOT NULL,
    CONSTRAINT PERSONA_IVAN_pk PRIMARY KEY (CI)
);

CREATE TABLE USUARIO (
    CI int  NOT NULL,
    usuario varchar(45)  NOT NULL,
    password varchar(45)  NOT NULL,
    CONSTRAINT USUARIO_IVAN_pk PRIMARY KEY (CI)
);
