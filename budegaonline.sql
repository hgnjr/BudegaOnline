-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tempo de Geração: Set 18, 2013 as 01:57 PM
-- Versão do Servidor: 5.1.53
-- Versão do PHP: 5.3.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de Dados: `budegaonline`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_categoria`
--

CREATE TABLE IF NOT EXISTS `tbl_categoria` (
  `CAT_CODIGO` int(11) NOT NULL AUTO_INCREMENT,
  `CAT_DESCRICAO` varchar(30) NOT NULL,
  PRIMARY KEY (`CAT_CODIGO`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Extraindo dados da tabela `tbl_categoria`
--

INSERT INTO `tbl_categoria` (`CAT_CODIGO`, `CAT_DESCRICAO`) VALUES
(4, 'cerveja');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_cidade`
--

CREATE TABLE IF NOT EXISTS `tbl_cidade` (
  `CID_CODIGO` int(11) NOT NULL AUTO_INCREMENT,
  `CID_DESCRICAO` varchar(40) NOT NULL,
  `CID_UF` char(2) DEFAULT NULL,
  PRIMARY KEY (`CID_CODIGO`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=33 ;

--
-- Extraindo dados da tabela `tbl_cidade`
--

INSERT INTO `tbl_cidade` (`CID_CODIGO`, `CID_DESCRICAO`, `CID_UF`) VALUES
(26, 'Teresina', 'SC'),
(27, 'Timon', 'MA');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_fornecedor`
--

CREATE TABLE IF NOT EXISTS `tbl_fornecedor` (
  `FOR_CODIGO` int(11) NOT NULL AUTO_INCREMENT,
  `CID_CODIGO` int(11) NOT NULL,
  `FOR_RAZAOSOCIAL` varchar(40) NOT NULL,
  `FOR_NOME_FANTASIA` varchar(40) DEFAULT NULL,
  `FOR_ENDERECO` varchar(50) DEFAULT NULL,
  `FOR_BAIRRO` varchar(30) DEFAULT NULL,
  `FOR_FONE` varchar(16) DEFAULT NULL,
  `FOR_RESPONSAVEL` varchar(50) DEFAULT NULL,
  `FOR_EMAIL` varchar(60) DEFAULT NULL,
  `FOR_CNPJ` varchar(18) DEFAULT NULL,
  `FOR_CEP` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`FOR_CODIGO`),
  KEY `FK_CIDADE_FORNECEDOR` (`CID_CODIGO`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `tbl_fornecedor`
--

INSERT INTO `tbl_fornecedor` (`FOR_CODIGO`, `CID_CODIGO`, `FOR_RAZAOSOCIAL`, `FOR_NOME_FANTASIA`, `FOR_ENDERECO`, `FOR_BAIRRO`, `FOR_FONE`, `FOR_RESPONSAVEL`, `FOR_EMAIL`, `FOR_CNPJ`, `FOR_CEP`) VALUES
(1, 26, 'hehe', 'teste', 'rua', 'parque', '3333', 'eu', 'ekmkmijkln@njnj', '5555', '33333'),
(2, 26, 'teste', 'teste', 'rua', 'parque', '3333', 'eu', 'ekmkmijkln@njnj', '22222', '33333');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_produto`
--

CREATE TABLE IF NOT EXISTS `tbl_produto` (
  `PROD_CODIGO` int(11) NOT NULL AUTO_INCREMENT,
  `FOR_CODIGO` int(11) NOT NULL,
  `CAT_CODIGO` int(11) NOT NULL,
  `PROD_DESCRICAO` varchar(40) NOT NULL,
  `PROD_VALOR` decimal(10,2) DEFAULT NULL,
  `PROD_QUANTIDADE` decimal(10,2) DEFAULT NULL,
  `PROD_TIPO` varchar(5) DEFAULT NULL,
  `PROD_OBS` text,
  PRIMARY KEY (`PROD_CODIGO`),
  KEY `FK_PRODUTO_CATEGORIA` (`CAT_CODIGO`),
  KEY `FK_PRODUTO_FORNECEDOR` (`FOR_CODIGO`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `tbl_produto`
--

INSERT INTO `tbl_produto` (`PROD_CODIGO`, `FOR_CODIGO`, `CAT_CODIGO`, `PROD_DESCRICAO`, `PROD_VALOR`, `PROD_QUANTIDADE`, `PROD_TIPO`, `PROD_OBS`) VALUES
(1, 1, 4, 'e', '2.00', '2.00', 'lata', '222');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_usuario`
--

CREATE TABLE IF NOT EXISTS `tbl_usuario` (
  `USU_CODIGO` int(11) NOT NULL AUTO_INCREMENT,
  `USU_NOME` varchar(40) NOT NULL,
  `USU_LOGIN` varchar(10) NOT NULL,
  `USU_SENHA` varchar(10) NOT NULL,
  `USU_NIVEL` char(1) DEFAULT NULL,
  PRIMARY KEY (`USU_CODIGO`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Extraindo dados da tabela `tbl_usuario`
--

INSERT INTO `tbl_usuario` (`USU_CODIGO`, `USU_NOME`, `USU_LOGIN`, `USU_SENHA`, `USU_NIVEL`) VALUES
(1, 'hgnjr', 'hgnjr', 'hgnjr', 'A');
