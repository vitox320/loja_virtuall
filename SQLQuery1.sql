
CREATE DATABASE loja_virtuall
use loja_virtuall

CREATE TABLE ENDERECO(
	ID INT NOT NULL IDENTITY,
	LOGRADOURO VARCHAR(45) NOT NULL,
	BAIRRO VARCHAR(45) NOT NULL,
	CIDADE VARCHAR(45) NOT NULL,
	ESTADO VARCHAR(45) NOT NULL,
	NUMERO_CASA VARCHAR(10) NOT NULL,
	COMPLEMENTO VARCHAR(200) NULL,
	PRIMARY KEY(ID)
)

CREATE TABLE USUARIO(
	ID INT NOT NULL IDENTITY,
	ID_ENDERECO INT NULL,
	NOME VARCHAR(50) NOT NULL,
	CPF VARCHAR(11) NOT NULL,
	EMAIL VARCHAR(50) NOT NULL,
	SENHA VARCHAR(255) NOT NULL,
	PRIMARY KEY(ID),
	CONSTRAINT FK_USUARIO_ENDERECO FOREIGN KEY(ID_ENDERECO)
	REFERENCES ENDERECO(ID)
)

CREATE TABLE MARCA(
	ID INT NOT NULL IDENTITY,
	NOME VARCHAR(50) NOT NULL,
	DESCRICAO VARCHAR(50) NULL,
	PRIMARY KEY(ID)
)

CREATE TABLE CATEGORIA(
	ID INT NOT NULL,
	NOME VARCHAR(50) NOT NULL,
	DESCRICAO VARCHAR(50) NULL,
	PRIMARY KEY(ID)
)

CREATE TABLE PRODUTO(
	ID INT NOT NULL IDENTITY,
	ID_CATEGORIA INT NOT NULL,
	ID_MARCA INT NOT NULL,
	NOME VARCHAR(50) NOT NULL,
	DESCRICAO VARCHAR(300) NULL,
	PRECO DECIMAL NOT NULL,
	QUANTIDADE INT NOT NULL,
	PRIMARY KEY(ID),
	CONSTRAINT FK_PRODUTO_CATEGORIA FOREIGN KEY(ID_CATEGORIA)
	REFERENCES CATEGORIA(ID),
	CONSTRAINT FK_PRODUTO_MARCA FOREIGN KEY(ID_MARCA)
	REFERENCES MARCA(ID)
)

CREATE TABLE USUARIO_PRODUTO(
	ID_USUARIO INT NOT NULL,
	ID_PRODUTO INT NOT NULL,
	ID_CATEGORIA INT NOT NULL,
	CONSTRAINT FK_USUARIO_PRODUTO_USUARIO FOREIGN KEY(ID_USUARIO)
	REFERENCES USUARIO(ID),
	CONSTRAINT FK_USUARIO_PRODUTO_PRODUTO FOREIGN KEY(ID_PRODUTO)
	REFERENCES PRODUTO(ID),
	CONSTRAINT FK_USUARIO_PRODUTO_CATEGORIA FOREIGN KEY(ID_CATEGORIA)
	REFERENCES CATEGORIA(ID)
)
