-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 21-Nov-2020 às 20:57
-- Versão do servidor: 10.4.14-MariaDB
-- versão do PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `imobiliaria`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `administrativos`
--

CREATE TABLE `administrativos` (
  `codigo` int(3) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `rg` varchar(11) NOT NULL,
  `cpf` char(11) NOT NULL,
  `endereco` varchar(30) NOT NULL,
  `telefone` varchar(11) NOT NULL,
  `funcao` varchar(20) NOT NULL,
  `login` varchar(10) NOT NULL,
  `senha` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `administrativos`
--

INSERT INTO `administrativos` (`codigo`, `nome`, `rg`, `cpf`, `endereco`, `telefone`, `funcao`, `login`, `senha`) VALUES
(1, 'jose', '', '', '', '', '', 'jose', 1234);

-- --------------------------------------------------------

--
-- Estrutura da tabela `atendimento`
--

CREATE TABLE `atendimento` (
  `fk_corretor_codigo` int(3) NOT NULL,
  `fk_cliente_codigo` int(4) NOT NULL,
  `data` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

CREATE TABLE `clientes` (
  `codigo` int(4) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `rg` varchar(11) NOT NULL,
  `cpf` char(11) NOT NULL,
  `endereco` varchar(30) NOT NULL,
  `telefone` varchar(11) NOT NULL,
  `email` varchar(20) NOT NULL,
  `login` varchar(10) NOT NULL,
  `senha` int(4) NOT NULL,
  `token` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`codigo`, `nome`, `rg`, `cpf`, `endereco`, `telefone`, `email`, `login`, `senha`, `token`) VALUES
(1, 'RODRIGO', '77777777777', '78901234567', 'RUA DINO, 200', '2222-6666', '', '', 0, ''),
(2, 'CLAUDIA', '88888888888', '89012345678', 'RUA LIMA, 658', '3333-5555', '', '', 0, ''),
(3, 'MARIANA', '99999999999', '90123456789', 'AV, SÃO JOÃO, 56', '8888-9999', '', '', 0, '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `corretores`
--

CREATE TABLE `corretores` (
  `codigo` int(3) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `rg` varchar(11) NOT NULL,
  `cpf` char(11) NOT NULL,
  `creci` varchar(11) NOT NULL,
  `endereco` varchar(30) NOT NULL,
  `telefone` varchar(11) NOT NULL,
  `login` varchar(10) NOT NULL,
  `senha` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `corretores`
--

INSERT INTO `corretores` (`codigo`, `nome`, `rg`, `cpf`, `creci`, `endereco`, `telefone`, `login`, `senha`) VALUES
(1, 'Moacir', '44444444444', '44444444444', '44444444', 'Vila Ana', '99999-4444', 'moacir', 1234);

-- --------------------------------------------------------

--
-- Estrutura da tabela `imoveis`
--

CREATE TABLE `imoveis` (
  `codigo` int(4) NOT NULL,
  `fk_proprietario_codigo` int(4) NOT NULL,
  `fk_cliente_codigo` int(4) NOT NULL,
  `tipo` varchar(15) NOT NULL,
  `numquartos` int(2) NOT NULL,
  `preco` decimal(10,2) NOT NULL,
  `endereco` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `imoveis`
--

INSERT INTO `imoveis` (`codigo`, `fk_proprietario_codigo`, `fk_cliente_codigo`, `tipo`, `numquartos`, `preco`, `endereco`) VALUES
(1, 1, 1, 'Casa', 3, '800000.00', 'Ponte São João'),
(2, 1, 3, 'Apartamento', 2, '560000.00', 'Vila Progresso');

-- --------------------------------------------------------

--
-- Estrutura da tabela `proprietarios`
--

CREATE TABLE `proprietarios` (
  `codigo` int(4) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `rg` varchar(11) NOT NULL,
  `cpf` char(11) NOT NULL,
  `endereco` varchar(30) NOT NULL,
  `telefone` varchar(11) NOT NULL,
  `login` varchar(10) NOT NULL,
  `senha` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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

CREATE TABLE `representacao` (
  `fk_corretor_codigo` int(3) NOT NULL,
  `fk_proprietario_codigo` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `administrativos`
--
ALTER TABLE `administrativos`
  ADD PRIMARY KEY (`codigo`);

--
-- Índices para tabela `atendimento`
--
ALTER TABLE `atendimento`
  ADD PRIMARY KEY (`fk_corretor_codigo`,`fk_cliente_codigo`);

--
-- Índices para tabela `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`codigo`);

--
-- Índices para tabela `corretores`
--
ALTER TABLE `corretores`
  ADD PRIMARY KEY (`codigo`);

--
-- Índices para tabela `imoveis`
--
ALTER TABLE `imoveis`
  ADD PRIMARY KEY (`codigo`);

--
-- Índices para tabela `proprietarios`
--
ALTER TABLE `proprietarios`
  ADD PRIMARY KEY (`codigo`);

--
-- Índices para tabela `representacao`
--
ALTER TABLE `representacao`
  ADD PRIMARY KEY (`fk_corretor_codigo`,`fk_proprietario_codigo`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `administrativos`
--
ALTER TABLE `administrativos`
  MODIFY `codigo` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `clientes`
--
ALTER TABLE `clientes`
  MODIFY `codigo` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `corretores`
--
ALTER TABLE `corretores`
  MODIFY `codigo` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `imoveis`
--
ALTER TABLE `imoveis`
  MODIFY `codigo` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `proprietarios`
--
ALTER TABLE `proprietarios`
  MODIFY `codigo` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
