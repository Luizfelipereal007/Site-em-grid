CREATE DATABASE site_adm_griddb;

USE site_adm_griddb;

CREATE TABLE categoria (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(255) NOT NULL
);

CREATE TABLE usuario (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(255) NOT NULL,
    email VARCHAR(255) UNIQUE NOT NULL,
    telefone VARCHAR(20),
    data_nascimento DATE,
    cpf VARCHAR(11) UNIQUE NOT NULL
);

CREATE TABLE artigo (
    id INT PRIMARY KEY AUTO_INCREMENT,
    titulo VARCHAR(255) NOT NULL,
    conteudo TEXT NOT NULL,
    categoria_id INT,
    FOREIGN KEY (categoria_id) REFERENCES categoria(id)
);

CREATE TABLE produto (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(255) NOT NULL,
    descricao VARCHAR(500),
    categoria_id INT NOT NULL,
    preco DECIMAL(10,2) NOT NULL,
    imagem_url VARCHAR(500) NOT NULL,
    FOREIGN KEY (categoria_id) REFERENCES categoria(id)
);  