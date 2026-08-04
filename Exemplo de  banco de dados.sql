create database mypocket;

use mypocket;

create table users (
id int primary key auto_increment,
nome varchar(150)
);

select * from users;
update users set nome = "Teste" where id = 1;
insert into users (nome) values ('Luiz');

delete from users where id = 2;
