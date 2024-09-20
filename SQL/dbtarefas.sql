drop database tarefas;
create database tarefas;
use tarefas;

create table tarefas(
	id int not null auto_increment primary key, 
    nome varchar(100) not null,
    descricao varchar(200) not null,
    prioridade varchar(20),
    prazo date,
    concluida boolean
);



