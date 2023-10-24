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

CREATE TABLE Evento (
    id_eve INT PRIMARY KEY AUTO_INCREMENT,
    rua_eve VARCHAR(100),
    cidade_eve VARCHAR(100),
    estado_eve VARCHAR(100),
    cep_eve VARCHAR(100),
    país_eve VARCHAR(100),
    hora_eve TIME,
    data_eve DATE,
    tipo_eve VARCHAR(100),
    id_usu_fk INT,
    FOREIGN KEY (id_usu_fk) REFERENCES Usuario (id_usu)
);


create table Revelação(
id_rev int primary key auto_increment,
nome_rev varchar(100),
email_rev varchar(100),
telefone_rev varchar(100),
quant_rev int,
formato_rev varchar(100),
cidade_rev varchar(100),
estado_rev varchar(100),
cep_rev varchar(100)
)