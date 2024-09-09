drop database tarefas;
create database tarefas;
use tarefas;

create table tarefas(
	id int not null auto_increment primary key, 
    nome varchar(100) not null,
    descricao varchar(200) not null,
    prioridade int,
    prazo datetime,
    concluida boolean
);

INSERT INTO tarefas (nome, descricao, prazo)
VALUES 
('Comprar mantimentos', 'Comprar alimentos e suprimentos para a semana', '2024-09-07'),
('Estudar PHP', 'Revisar conceitos básicos de conexão com MySQL', '2024-09-10'),
('Fazer exercícios', 'Realizar exercícios de programação para prática', '2024-09-12');



