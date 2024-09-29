create database barbergo;

use barbergo;

create table cliente (
	id int not null auto_increment primary key,
    nome varchar(256),
    sobrenome varchar(256),
    email varchar(256),
    endereco varchar(256)
);

create table login (
	id int not null auto_increment primary key,
    email varchar(300) not null,
    pass varchar(16) not null
);

create table agendamento (
	id int not null auto_increment primary key,
    id_cliente int not null,
    id_servico int not null,
    dia date not null,
    hora time not null
);