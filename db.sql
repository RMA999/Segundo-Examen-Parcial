create table registro (
    id int AUTO_INCREMENT,
    primary key (id),
    correo varchar(50) Not null,
    clave varchar(50) Not null
);

create table conferencista(
    id int AUTO_INCREMENT,
    primary key (id),
    nombre varchar(50) Not null,
    apellido varchar(50) Not null,
    profesion varchar(50) Not null,
    biografia varchar(30) Not null,
    correo varchar (50) Not null
);

create table conferencia (
    id int AUTO_INCREMENT,
    primary key (id),
    nombre_conf varchar(50) Not null,
    correo varchar(50) Not null
);

create table asistentes (
    id int AUTO_INCREMENT,
    primary key (id),
    nombre varchar(50) Not null,
    apellido varchar(50) Not null,
    correo varchar(50) Not null
);