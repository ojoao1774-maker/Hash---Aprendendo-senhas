
CREATE DATABASE IF NOT EXISTS sistema_usuarios;

USE sistema_usuarios;

CREATE TABLE usuarios (
  id int(11) NOT NULL primary key AUTO_INCREMENT,
  nome varchar(120) NOT NULL,
  cpf varchar(14) NOT NULL,
  email varchar(100) NOT NULL,
  telefone varchar(20) NOT NULL,
  senha varchar(255) NOT NULL 
) 


