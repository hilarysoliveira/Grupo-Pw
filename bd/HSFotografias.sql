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

create table Evento(
id_eve int primary key auto_increment,
rua_eve varchar(100),
cidade_eve varchar(100),
estado_eve varchar(100),
cep_eve varchar(100),
país_eve varchar(100),
hora_eve time,
data_eve date,
tipo_eve varchar(100),
id_usu_eve_fk int,
foreign key (id_usu_eve_fk) references Usuario (id_usu) 
);