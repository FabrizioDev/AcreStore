CREATE DATABASE loja;

USE loja;

CREATE TABLE usuario (
    id BIGINT(20) NOT NULL AUTO_INCREMENT PRIMARY KEY, 
    nome VARCHAR(255) NOT NULL, 
    cpf CHAR(14) NOT NULL, 
    data_nascimento DATE NOT NULL, 
    sexo ENUM('M', 'F') NOT NULL, 
    email VARCHAR(255) NOT NULL, 
    senha VARCHAR(64) NOT NULL
);

CREATE TABLE produto (
    id BIGINT(20) NOT NULL AUTO_INCREMENT PRIMARY KEY, 
    titulo VARCHAR(255) NOT NULL, 
    descricao TEXT NOT NULL, 
    valor DECIMAL(15,2) NOT NULL, 
    quantidade INT(9) NOT NULL DEFAULT 0, 
    imagem VARCHAR(255) NOT NULL
);

CREATE TABLE compra (
    id BIGINT(20) NOT NULL AUTO_INCREMENT PRIMARY KEY, 
    id_usuario BIGINT(20) NOT NULL,
    FOREIGN KEY (id_usuario) REFERENCES usuario (id),
    id_produto BIGINT(20) NOT NULL,
    FOREIGN KEY (id_produto) REFERENCES produto (id)
);
