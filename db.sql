create database doeki;


CREATE TABLE usuarios (
    id_usuario INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(50) NOT NULL,
    email VARCHAR(50) UNIQUE NOT NULL,
    senha VARCHAR(50) NOT NULL
)

INSERT INTO usuarios VALUES ('default','Felipe Suricata', 'felipe@gmail.com', '154515645')

INSERT INTO usuarios VALUES ('omargih','gihomar@gmail.com','123456');

SELECT * FROM usuarios;

CREATE TABLE doacoes (
    id_doacoe INT PRIMARY KEY AUTO_INCREMENT,
    id_usuario INT NOT NULL,
    data_nasc DATE NOT NULL,
    tel VARCHAR(15) NOT NULL,
    endereco VARCHAR(50) NOT NULL,
    item VARCHAR(25) NOT NULL,
    tipo VARCHAR(20)  NOT NULL,
    data DATETIME DEFAULT NOW(),
    FOREIGN KEY (id_usuario) REFERENCES usuarios(id_usuario)
);




INSERT INTO doacoes VALUE ('default', '1', '1998/06/06', '(11)11111-1111', 'Rua Feliciano', 'cadeira', 'doador', 'default')

SELECT d.id_doacoe, u.nome, u.email,  d.data_nasc, d.tel, d.endereco, d.item, d.tipo
FROM usuarios AS u INNER JOIN doacoes AS d;


SELECT * FROM comentarios AS c INNER JOIN usuarios AS u WHERE c.id_usuario = u.id_usuario && c.id_comentario = 6;

select * from doacoes;

create table comentarios (
id_comentario int auto_increment primary key,
id_usuario INT NOT NULL,
descricao varchar(300) not null,
data DATETIME DEFAULT NOW(),
FOREIGN KEY (id_usuario) REFERENCES usuarios(id_usuario)
);

INSERT INTO comentarios VALUES ('default', 1, 'O site esta PRO mesmo', 'default');

SELECT u.nome AS nome, c.descricao AS descripcao 
FROM comentarios AS c 
    INNER JOIN usuarios AS u;



