<h1>Passos de como fazer um banco de dados em SQL:</h1>

1 - Abra o Xampp e ligue MySQL<br>
2 - Abra o MySQL Workbench<br>
3 - Crie uma connection nele, com o nome root (verifique se o host e a porta estão corretas).<br>

----------------------

<h1>Comandos em SQL:</h1>

Criar um database:<br>
create database nomedoprojeto;

Selecionar qual database deseja usar:<br>
use nomedoprojeto;

Criar uma tabela:<br>
create table nomedatabela ( <br>
  id int primary key auto_increment, <br>
  nomevariavel tipovariavel <br>
);

Selecionar todas as colunas da tabela que deseja usar:<br>
select * from nomedatabela;

Selecionar uma coluna específica que deseja usar:<br>
select nomedacoluna from nomedatabela;

Inserir dados nas tabelas:<br>
insert into nomedatabela (nomevariavel) values ('dados');

Atualizar o dado na tabela:<br>
update nomedatabela set nomevariavel = 'novodado' where id = numerodoid;
