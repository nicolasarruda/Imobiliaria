-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 20-Nov-2020 às 21:39
-- Versão do servidor: 5.7.26
-- versão do PHP: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `imobiliaria`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `administrativos`
--

DROP TABLE IF EXISTS `administrativos`;
CREATE TABLE IF NOT EXISTS `administrativos` (
  `codigo` int(3) NOT NULL AUTO_INCREMENT,
  `nome` varchar(30) NOT NULL,
  `rg` varchar(11) NOT NULL,
  `cpf` char(11) NOT NULL,
  `endereco` varchar(30) NOT NULL,
  `telefone` varchar(11) NOT NULL,
  `funcao` varchar(20) NOT NULL,
  `login` varchar(10) NOT NULL,
  `senha` int(4) NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `atendimento`
--

DROP TABLE IF EXISTS `atendimento`;
CREATE TABLE IF NOT EXISTS `atendimento` (
  `fk_corretor_codigo` int(3) NOT NULL,
  `fk_cliente_codigo` int(4) NOT NULL,
  `data` date NOT NULL,
  PRIMARY KEY (`fk_corretor_codigo`,`fk_cliente_codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

DROP TABLE IF EXISTS `clientes`;
CREATE TABLE IF NOT EXISTS `clientes` (
  `codigo` int(4) NOT NULL AUTO_INCREMENT,
  `nome` varchar(30) NOT NULL,
  `rg` varchar(11) NOT NULL,
  `cpf` char(11) NOT NULL,
  `endereco` varchar(30) NOT NULL,
  `telefone` varchar(11) NOT NULL,
  `login` varchar(10) NOT NULL,
  `senha` int(4) NOT NULL,
  `token` varchar(32) NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`codigo`, `nome`, `rg`, `cpf`, `endereco`, `telefone`, `login`, `senha`, `token`) VALUES
(1, 'RODRIGO', '77777777777', '78901234567', 'RUA DINO, 200', '2222-6666', '123', 123, '55a4f8d5fea775c147ecc7e13d00d728'),
(2, 'CLAUDIA', '88888888888', '89012345678', 'RUA LIMA, 658', '3333-5555', '133', 133, '9770f133d788bcf1c32ed1cb99abea25'),
(3, 'MARIANA', '99999999999', '90123456789', 'AV, SAO JOAO, 56', '8888-9999', '122', 122, '451591fc6e45563c89bb12cd25ea1d86');

-- --------------------------------------------------------

--
-- Estrutura da tabela `corretores`
--

DROP TABLE IF EXISTS `corretores`;
CREATE TABLE IF NOT EXISTS `corretores` (
  `codigo` int(3) NOT NULL AUTO_INCREMENT,
  `nome` varchar(30) NOT NULL,
  `rg` varchar(11) NOT NULL,
  `cpf` char(11) NOT NULL,
  `creci` varchar(11) NOT NULL,
  `endereco` varchar(30) NOT NULL,
  `telefone` varchar(11) NOT NULL,
  `login` varchar(10) NOT NULL,
  `senha` int(4) NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `imoveis`
--

DROP TABLE IF EXISTS `imoveis`;
CREATE TABLE IF NOT EXISTS `imoveis` (
  `codigo` int(4) NOT NULL AUTO_INCREMENT,
  `fk_proprietario_codigo` int(4) NOT NULL,
  `fk_cliente_codigo` int(4) NOT NULL,
  `tipo` varchar(15) NOT NULL,
  `numquartos` int(2) NOT NULL,
  `preco` decimal(10,2) NOT NULL,
  `endereco` varchar(30) NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `proprietarios`
--

DROP TABLE IF EXISTS `proprietarios`;
CREATE TABLE IF NOT EXISTS `proprietarios` (
  `codigo` int(4) NOT NULL AUTO_INCREMENT,
  `nome` varchar(30) NOT NULL,
  `rg` varchar(11) NOT NULL,
  `cpf` char(11) NOT NULL,
  `endereco` varchar(30) NOT NULL,
  `telefone` varchar(11) NOT NULL,
  `login` varchar(10) NOT NULL,
  `senha` int(4) NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `proprietarios`
--

INSERT INTO `proprietarios` (`codigo`, `nome`, `rg`, `cpf`, `endereco`, `telefone`, `login`, `senha`) VALUES
(1, 'NICOLAS ARRUDA', '12121212121', '12345678901', 'VILA GRAFF', '1000-0001', '', 0),
(2, 'FILLIPE AUGUSTO', '23232323232', '23456789012', 'CORRUPIRA', '1000-0002', '', 0),
(3, 'JOSÉ ROBERTO', '34343434343', '34567890123', 'VILA PROGRESSO', '1000-0003', '', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `representacao`
--

DROP TABLE IF EXISTS `representacao`;
CREATE TABLE IF NOT EXISTS `representacao` (
  `fk_corretor_codigo` int(3) NOT NULL,
  `fk_proprietario_codigo` int(4) NOT NULL,
  PRIMARY KEY (`fk_corretor_codigo`,`fk_proprietario_codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
