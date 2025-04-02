CREATE DATABASE IF NOT EXISTS devmedia_db;
USE devmedia_db;

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
    -- restrição de integridade referencial, ou seja, categoriaId na tabela Artigo deve corresponder a um id existente na tabela Categoria.
    -- garante que não seja possível inserir um categoriaId em Artigo que não exista na tabela Categoria.
);
