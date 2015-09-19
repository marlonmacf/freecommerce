-- Microsoft SQL Server E-commerce de servicos para Freelacer

-- ------------------------------------------------------------------------------------------------------------------------------------
-- Schema Drop DBCommerce
-- ------------------------------------------------------------------------------------------------------------------------------------
USE Master;
GO

DROP DATABASE DBCommerce;
GO

-- ------------------------------------------------------------------------------------------------------------------------------------
-- Schema Create DBCommerce
-- ------------------------------------------------------------------------------------------------------------------------------------
CREATE DATABASE DBCommerce;
GO

USE DBCommerce;
GO

-- ------------------------------------------------------------------------------------------------------------------------------------
-- Create Table DBCommerce.Perfis
-- ------------------------------------------------------------------------------------------------------------------------------------
CREATE TABLE Perfis
(
	id							BIGINT NOT NULL IDENTITY(1,1),
	nome						VARCHAR(100) NOT NULL,
	email						VARCHAR(100) NOT NULL UNIQUE,
	senha						VARCHAR(100) NOT NULL,
    descricao					VARCHAR(200) NULL,
	dataCriacao					DATETIME NULL,
	dataAtualizacao				DATETIME NULL,
	
	CONSTRAINT PKPerfil PRIMARY KEY (id)
) ;

-- ------------------------------------------------------------------------------------------------------------------------------------
-- Create Table DBCommerce.Categorias
-- ------------------------------------------------------------------------------------------------------------------------------------
CREATE TABLE Categorias
(
	id							INT NOT NULL IDENTITY(1,1),
	nome						VARCHAR(100) NOT NULL UNIQUE,
	
	CONSTRAINT PKCategoria PRIMARY KEY (id)
) ;

-- ------------------------------------------------------------------------------------------------------------------------------------
-- Create Table DBCommerce.Competencias
-- ------------------------------------------------------------------------------------------------------------------------------------
CREATE TABLE Competencias
(
	id							INT NOT NULL IDENTITY(1,1),
    idCategoria					INT NOT NULL,
	nome						VARCHAR(100) NOT NULL UNIQUE,
	
	CONSTRAINT PKCompetencia PRIMARY KEY (id),
    CONSTRAINT FKCompetenciaCategoria FOREIGN KEY (idCategoria)
		REFERENCES Categorias (id)
		ON DELETE NO ACTION
		ON UPDATE NO ACTION
) ;

-- ------------------------------------------------------------------------------------------------------------------------------------
-- Create Table DBCommerce.Servicos
-- ------------------------------------------------------------------------------------------------------------------------------------
CREATE TABLE Servicos
(
	id							BIGINT NOT NULL IDENTITY(1,1),
    idPerfil					BIGINT NOT NULL,
    idCompetencia				INT NOT NULL,
	titulo						VARCHAR(100) NOT NULL,
	descricao					VARCHAR(200) NOT NULL,
	duracao						INT NULL,
    dataCriacao					DATETIME NULL,
	dataAtualizacao				DATETIME NULL,
	
	CONSTRAINT PKServico PRIMARY KEY (id),
    CONSTRAINT CHServico CHECK (duracao > 0),
    CONSTRAINT FKServicoPerfil FOREIGN KEY (idPerfil)
		REFERENCES Perfis (id)
		ON DELETE NO ACTION
		ON UPDATE NO ACTION,
	CONSTRAINT FKServicoCompetencia FOREIGN KEY (idCompetencia)
		REFERENCES Competencias (id)
		ON DELETE NO ACTION
		ON UPDATE NO ACTION
) ;

-- ------------------------------------------------------------------------------------------------------------------------------------
-- Create Table DBCommerce.Imagens
-- ------------------------------------------------------------------------------------------------------------------------------------
CREATE TABLE Imagens
(
	id							BIGINT NOT NULL IDENTITY(1,1),
    idServico					BIGINT NOT NULL,
	extencao					VARCHAR(5) NOT NULL,
    dataCriacao					DATETIME NULL,
	dataAtualizacao				DATETIME NULL,
	
	CONSTRAINT PKImagem PRIMARY KEY (id),
    CONSTRAINT CHImagem CHECK (extencao IN('jpg','jpeg','gif','png','dib','tif','tiff','svg','svgz')),
    CONSTRAINT FKImagemServico FOREIGN KEY (idServico)
		REFERENCES Servicos (id)
		ON DELETE NO ACTION
		ON UPDATE NO ACTION
) ;

-- ------------------------------------------------------------------------------------------------------------------------------------
-- Create Table DBCommerce.Tags
-- ------------------------------------------------------------------------------------------------------------------------------------
CREATE TABLE Tags
(
	id							BIGINT NOT NULL IDENTITY(1,1),
    idServico					BIGINT NOT NULL,
	nome						VARCHAR(100) NOT NULL UNIQUE,
    dataCriacao					DATETIME NULL,
	dataAtualizacao				DATETIME NULL,
	
	CONSTRAINT PKTag PRIMARY KEY (id),
    CONSTRAINT FKTagServico FOREIGN KEY (idServico)
		REFERENCES Servicos (id)
		ON DELETE NO ACTION
		ON UPDATE NO ACTION
) ;

-- ------------------------------------------------------------------------------------------------------------------------------------
-- Create Table DBCommerce.Extras
-- ------------------------------------------------------------------------------------------------------------------------------------
CREATE TABLE Extras
(
	id							BIGINT NOT NULL IDENTITY(1,1),
    idServico					BIGINT NOT NULL,
	descricao					VARCHAR(100) NOT NULL,
    valor 						DECIMAL(10,2),
    dataCriacao					DATETIME NULL,
	dataAtualizacao				DATETIME NULL,
	
	CONSTRAINT PKExtra PRIMARY KEY (id),
    CONSTRAINT CHExtra CHECK (valor > 0),
    CONSTRAINT FKExtraServico FOREIGN KEY (idServico)
		REFERENCES Servicos (id)
		ON DELETE NO ACTION
		ON UPDATE NO ACTION
) ;

-- ------------------------------------------------------------------------------------------------------------------------------------
-- Create Table DBCommerce.Comentarios
-- ------------------------------------------------------------------------------------------------------------------------------------
CREATE TABLE Comentarios
(
	id							BIGINT NOT NULL IDENTITY(1,1),
    idServico					BIGINT NOT NULL,
	idComentario				BIGINT NULL,
    descricao					VARCHAR(200) NOT NULL,
    avaliacao					INT NULL,
    dataCriacao					DATETIME NULL,
	dataAtualizacao				DATETIME NULL,
	
	CONSTRAINT PKComentario PRIMARY KEY (id),
    CONSTRAINT FKComentarioServico FOREIGN KEY (idServico)
		REFERENCES Servicos (id)
		ON DELETE NO ACTION
		ON UPDATE NO ACTION,
	CONSTRAINT FKComentarioComentario FOREIGN KEY (idComentario)
		REFERENCES Comentarios (id)
		ON DELETE NO ACTION
		ON UPDATE NO ACTION
) ;

-- ------------------------------------------------------------------------------------------------------------------------------------
-- Create Table DBCommerce.Solicitacoes
-- ------------------------------------------------------------------------------------------------------------------------------------
CREATE TABLE Solicitacoes
(
	id							BIGINT NOT NULL IDENTITY(1,1),
    idPerfil					BIGINT NOT NULL,
	idServico					BIGINT NOT NULL,
    dataCriacao					DATETIME NULL,
	dataAtualizacao				DATETIME NULL,
	
	CONSTRAINT PKSolicitacao PRIMARY KEY (id),
    CONSTRAINT FKSolicitacaoPerfil FOREIGN KEY (idPerfil)
		REFERENCES Perfis (id)
		ON DELETE NO ACTION
		ON UPDATE NO ACTION,
	CONSTRAINT FKSolicitacaoServico FOREIGN KEY (idServico)
		REFERENCES Servicos (id)
		ON DELETE NO ACTION
		ON UPDATE NO ACTION
) ;

-- ------------------------------------------------------------------------------------------------------------------------------------
-- Create Table DBCommerce.Solicitacoes_has_Extras
-- ------------------------------------------------------------------------------------------------------------------------------------
CREATE TABLE Solicitacoes_has_Extras
(
	id							BIGINT NOT NULL IDENTITY(1,1),
    idSolicitacao				BIGINT NOT NULL,
	idExtra						BIGINT NOT NULL,
    dataCriacao					DATETIME NULL,
	dataAtualizacao				DATETIME NULL,
	
	CONSTRAINT PKSolicitacaoHasExtra PRIMARY KEY (id),
    CONSTRAINT FKSolicitacaoHasExtraSolicitacao FOREIGN KEY (idSolicitacao)
		REFERENCES Solicitacoes (id)
		ON DELETE NO ACTION
		ON UPDATE NO ACTION,
	CONSTRAINT FKSolicitacaoHasExtraExtra FOREIGN KEY (idExtra)
		REFERENCES Extras (id)
		ON DELETE NO ACTION
		ON UPDATE NO ACTION
) ;

-- ------------------------------------------------------------------------------------------------------------------------------------
-- Select *
-- ------------------------------------------------------------------------------------------------------------------------------------
SELECT * FROM Perfis ;
GO

SELECT * FROM Categorias ;
GO

SELECT * FROM Competencias ;
GO

SELECT * FROM Servicos ;
GO

SELECT * FROM Imagens ;
GO

SELECT * FROM Tags ;
GO

SELECT * FROM Extras ;
GO

SELECT * FROM Comentarios ;
GO

SELECT * FROM Solicitacoes ;
GO

SELECT * FROM Solicitacoes_has_Extras ;
GO

-- ------------------------------------------------------------------------------------------------------------------------------------
-- Delete Table
-- ------------------------------------------------------------------------------------------------------------------------------------
DROP TABLE Perfis ;
GO

DROP TABLE Categorias ;
GO

DROP TABLE Competencias ;
GO

DROP TABLE Servicos ;
GO

DROP TABLE Imagens ;
GO

DROP TABLE Tags ;
GO

DROP TABLE Extras ;
GO

DROP TABLE Comentarios ;
GO

DROP TABLE Solicitacoes ;
GO

DROP TABLE Solicitacoes_has_Extras ;
GO
