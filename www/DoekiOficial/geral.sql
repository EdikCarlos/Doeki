create database cadastro;

CREATE TABLE usuarios (
    usuario_id INT PRIMARY KEY AUTO_INCREMENT,
    email VARCHAR(50) UNIQUE NOT NULL,
    nome VARCHAR(30) NOT NULL,
    sobrenome VARCHAR(30) NOT NULL,
    data_nasc DATE NOT NULL,
    tel VARCHAR(15) NOT NULL,
    endereco VARCHAR(50) NOT NULL,
    item VARCHAR(25) NOT NULL,
    tipo VARCHAR(20)  NOT NULL,
    data DATETIME DEFAULT NOW()
);


select * from usuarios;
desc usuarios;

create table testemunhos (
idtestemunho int auto_increment primary key,
nome varchar(30) not null,
email varchar(25) not null unique,
descricao varchar(300) not null,
data DATETIME DEFAULT NOW()
);


select * from testemunhos;
desc testemunhos;

create table inicios (    
    idusuario int AUTO_INCREMENT PRIMARY KEY,
    email varchar (100) NOT null UNIQUE,    
    senha varchar (20)
);

select * from inicios;
desc inicios;
