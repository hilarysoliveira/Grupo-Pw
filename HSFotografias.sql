create database HSFotografias;
use HSFotografias;

create table Contato(
id_con int primary key auto_increment,
nome_con varchar(100),
email_con varchar(100),
mensagem_con varchar(500)
);

create table Usuario(
id_usu int primary key auto_increment,
nome_usu varchar(100),
email_usu varchar(100),
senha_usu varchar(100)
);

create table Login(
id_log int primary key auto_increment,
data_hora_log datetime,
id_usu_fk int,
foreign key (id_usu_fk) references Usuario (id_usu)
);