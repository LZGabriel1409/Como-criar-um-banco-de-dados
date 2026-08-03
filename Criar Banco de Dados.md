<h1>Passos de como fazer um banco de dados em SQL:</h1>

1 - Abra o Xampp e ligue MySQL<br>
2 - Abra o MySQL Workbench<br>
3 - Crie uma connection nele, com o nome root (verifique se o host e a porta estão corretas).<br>

----------------------

<h1>Comandos em SQL:</h1>

<strong>Criar um database:<br></strong>
create database nomedoprojeto;

<strong>Selecionar qual database deseja usar:<br></strong>
use nomedoprojeto;

<strong>Criar uma tabela:<br></strong>
create table nomedatabela ( <br>
  id int primary key auto_increment, <br>
  nomevariavel tipovariavel <br>
);

<strong>Selecionar todas as colunas da tabela que deseja usar:<br></strong>
select * from nomedatabela;

<strong>Selecionar uma coluna específica que deseja usar:<br></strong>
select nomedacoluna from nomedatabela;

<strong>Inserir dados nas tabelas:<br></strong>
insert into nomedatabela (nomevariavel) values ('dados');

<strong>Atualizar o dado na tabela:<br></strong>
update nomedatabela set nomevariavel = 'novodado' where id = numerodoid;

<strong>Apaga o dado que está salvo nesse id:<br></strong>
delete from nomedatabela where id = numerodoid;
