create database projeto_programacao_web;

use projeto_programacao_web;

CREATE TABLE usuarios (
    id_usuarios INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    senha varchar(255) NOT NULL,
    last_name VARCHAR(255),
    phone VARCHAR(20),
    adress VARCHAR(255),
    login VARCHAR(255),
    created_at VARCHAR(255)
);

CREATE TABLE produtos (
	 id_produtos INT AUTO_INCREMENT PRIMARY KEY,
     nome_produto VARCHAR(255) NOT NULL,
     qntd_produto INT NOT NULL,
     valor_produto FLOAT NOT NULL,
	 created_at VARCHAR(255)
);

select * from usuarios;
select * from produtos;

insert into usuarios (name, last_name, adress, phone, login, senha) VALUES
('admin','admin','admin','admin','admin@admin', 'admin'),
('usuario','usuario', 'rua usuario', '41 999999999', 'usuario@usuario', 'usuario');

insert into produtos (nome_produto, qntd_produto, valor_produto) VALUES
('geladeira', '2', '2500'),
('microondas', '1', '300'),
('notebook Dell', '3', '5000'),
('fogão', '2', '800'),
('armário', '5', '750');