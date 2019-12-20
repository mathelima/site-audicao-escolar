create database audicaoEscolar;
use audicaoEscolar;

create table questionarios(id int primary key,
                     nome varchar(70),
                     sexo varchar(10),
                     dataNasc varchar(10),
                     idade int,
                     escola varchar(30),
                     turma varchar(10),
                     cidade varchar(30),
                     pergunta1 boolean,
                     pergunta2 boolean,
                     pergunta3 boolean,
                     pergunta4 boolean,
                     pergunta5 boolean,
                     pergunta6 boolean,
                     pergunta7 boolean,
                     pergunta8 int,
                     pergunta9 int,
                     pergunta10 varchar(10),
                     pergunta11 boolean,
                     pergunta12 boolean,
                     pergunta13 boolean,
                     pergunta14 varchar(10));
                     
select * from questionarios;

insert into questionarios values (1,'Maryanna', 'menina', '03 July, 1998', '21', 'PUC', '1A', 'Curitiba', true, true, true, true, true, true, true, '10', '10', 'dentro', true, true, true, 'alto');
insert into questionarios values (2,'Matheus', 'menino', '28 October, 1994', '25', 'UFPR', '2B', 'Curitiba', false, false, false, true, true, true, true, '15', '5', 'fora', true, true, true, 'medio');

create table usuarios(id int primary key,
                     nome varchar(70),
                     usuario varchar(20),
                     senha varchar(20));
                     
select * from usuarios;