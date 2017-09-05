-- Comandos de Criação de um Banco de Dados com os principais comados do mysql

-- Criação do Banco de Dados:
drop database CodeBits;
create database CodeBits DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;

-- Abrir um BD
use CodeBits

-- Criar tabelas dentro do BD aberto

-- Usuário
create table user(
	user_cod int unsigned not null auto_increment,
	user_name varchar(100) not null,
	primary key (user_cod)
) auto_increment=1;

-- Arquivos
create table archive(
	archive_cod int unsigned not null auto_increment,
	archive_name varchar(100) not null,
	user_cod int unsigned not null,
	primary key (archive_cod),
	foreign key (user_cod) references user(user_cod)
) auto_increment=1;