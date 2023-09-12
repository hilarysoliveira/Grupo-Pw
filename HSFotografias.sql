create database HSFotografias;
use HSFotografias;

create table Contato(
id_con int primary key auto_increment,
email_con varchar(100),
telefone_con varchar(100),
rua_numero_con varchar(100),
cidade_con varchar(100),
estado_con varchar(100),
motivo_con varchar(100)
);

create table Feedback(
id_fee int primary key auto_increment,
identificacao_fee varchar(100),
nome_fee varchar(100),
email_fee varchar(100),
celular_fee varchar(100),
classificacao1_fee varchar(100),
classificacao2_fee varchar(100),
classificacao3_fee varchar(100)
);