drop database snctapp;
create database snctapp;
use snctapp;

create table evento(
cod int primary key auto_increment,
levento varchar(500),
nome varchar(500),
mensagem varchar(1000),
imagem varchar(1000));

select * from evento;