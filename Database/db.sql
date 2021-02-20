create database doeki;


CREATE TABLE usuarios (
    id_usuario INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(50) NOT NULL,
    email VARCHAR(50) UNIQUE NOT NULL,
    senha VARCHAR(50) NOT NULL,
    situacoe_id int(11) NOT NULL DEFAULT '0',
    niveis_acesso_id int(11) NOT NULL DEFAULT 2,
    created DATETIME NOT NULL,
    modified DATETIME DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;


INSERT INTO usuarios VALUES
(1, 'Convidado', 'admin@admin.com', '202cb962ac59075b964b07152d234b70', 1, 1, '2016-02-14 00:00:01', '2016-02-20 21:58:01'),
(2, 'Gi', 'gi@gmial.com', '202cb962ac59075b964b07152d234b70', 1, 2, '2016-02-14 00:00:04', '2016-02-20 21:58:12'),
(3, 'Felipe', 'fe@gmail.com', '202cb962ac59075b964b07152d234b70', 1, 2, '2016-02-14 00:00:03', '2016-02-20 21:58:25')


SELECT COUNT(*) AS nro FROM usuarios

SELECT COUNT(*) FROM usuarios AS u JOIN doacoes AS d WHERE u.id_usuario = d.id_usuario AND d.tipo = "beneficiario";



CREATE TABLE niveis_acessos (
  id int(11) NOT NULL AUTO_INCREMENT,
  nome varchar(50) NOT NULL,
  created datetime NOT NULL,
  modified datetime DEFAULT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

INSERT INTO niveis_acessos
VALUES  (1, 'Administrador', '2016-02-19 00:00:00', NULL),
        (2, 'Cliente', '2016-02-19 00:00:00', NULL);

SELECT * FROM niveis_acessos;

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
fk_usuario INT NOT NULL,
descricao varchar(300) not null,
data DATETIME DEFAULT NOW(),
FOREIGN KEY (fk_usuario) REFERENCES usuarios(id_usuario)
);

DELETE FROM comentarios WHERE fk_usuario = $id_usuario AND id_comentario = $id_comentario

INSERT INTO comentarios VALUES ('default', 1, 'O site esta PRO mesmo', 'default');

SELECT u.nome AS nome, c.descricao AS descripcao 
FROM comentarios AS c 
    INNER JOIN usuarios AS u;


SELECT email from usuarios where email = 'edik@gmail.com'
SELECT email from usuarios where senha = '827ccb0eea8a706c4c34a16891f84e7b'




DROP TABLE usuarios;
DROP TABLE doacoes;
DROP TABLE comentarios;


SELECT d.id_doacoe AS numero, u.nome AS nome, u.email AS email,  d.data_nasc AS data, d.tel AS tel, d.endereco AS endereco, d.item AS item, d.tipo AS tipo
FROM usuarios AS u JOIN doacoes AS d WHERE d.id_usuario = u.id_usuario