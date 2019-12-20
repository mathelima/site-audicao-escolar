create database audicaoEscolar;
use audicaoEscolar;

create table questionarios(id int primary key,
                     nome varchar(70),
                     sexo varchar(10),
                     dataNasc varchar(20),
                     idade int,
                     escola varchar(30),
                     turma varchar(10),
                     cidade varchar(30),
                     pergunta1 varchar(10),
                     pergunta2 varchar(10),
                     pergunta3 varchar(10),
                     pergunta4 varchar(10),
                     pergunta5 varchar(10),
                     pergunta6 varchar(10),
                     pergunta7 varchar(10),
                     pergunta8 int,
                     pergunta9 int,
                     pergunta10 varchar(10),
                     pergunta11 varchar(10),
                     pergunta12 varchar(10),
                     pergunta13 varchar(10),
                     pergunta14 varchar(10));
                     
select * from questionarios;

insert into questionarios values (1,'Maryanna', 'menina', '03 July, 1998', '21', 'PUC', '1A', 'Curitiba', "sim", "sim", "sim", "sim", "sim", "sim", "sim", '10', '10', 'dentro', "sim", "sim", "sim", 'alto');
insert into questionarios values (2,'Matheus', 'menino', '28 October, 1994', '25', 'UFPR', '2B', 'Curitiba', "não", "não", "não", "sim", "sim", "sim", "sim", '15', '5', 'fora', "sim", "sim", "sim", 'medio');

create table usuarios(id int primary key,
                     nome varchar(70),
                     usuario varchar(20),
                     senha varchar(20));
                     
select * from usuarios;

create table fonoaudiologo(id int primary key,
                     nome varchar(70),
                     usuario varchar(20),
                     senha varchar(20));
                     
insert into fonoaudiologo value (1, 'Ana', 'FonoAna', '1234');

create table crianca(id int primary key,
                     nome varchar(70),
                     responsavel varchar(70),
                     dataNasc varchar(20),
                     idade int,
                     escola varchar(30),
                     turma varchar(30),
                     cidade varchar(30),
                     usuario varchar(40),
                     senha varchar(40));
                     
select * from crianca;

insert into questionarios values (3,'João', 'menino', '28 October, 2010', '9', 'Bastos Maia', '2B', 'Curitiba', "não", "não", "não", "sim", "sim", "sim", "sim", '2', '5', 'fora', "sim", "sim", "sim", 'medio');

