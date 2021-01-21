-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 30/11/2020 às 22:11
-- Versão do servidor: 10.4.13-MariaDB
-- Versão do PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bd_funcionarios`
--
CREATE DATABASE IF NOT EXISTS `bd_funcionarios` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE `bd_funcionarios`;

-- --------------------------------------------------------

--
-- Estrutura para tabela `funcionarios_tb`
--

CREATE TABLE `funcionarios_tb` (
  `id_funcionario` int(11) NOT NULL,
  `nome` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cargo` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `funcionarios_tb`
--

INSERT INTO `funcionarios_tb` (`id_funcionario`, `nome`, `cargo`, `email`) VALUES
(1, 'Paula Bacili', 'Designer', 'paula@teste.com'),
(5, 'Jason Sobreiro', 'Programador', 'jason@teste.com'),
(6, 'Juliana Mendes', 'Arquiteto de Sistemas', 'juliana@designer.com'),
(7, 'Moises Silva', 'Gerente', 'moises@teste.com'),
(8, 'Erika Dias', 'DBA', 'erikap@teste.com'),
(9, 'Ricardo Oliveira', 'Analista', 'ricardooliver@teste.com');

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuario_tb`
--

CREATE TABLE `usuario_tb` (
  `id_usuario` int(11) NOT NULL,
  `username` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `usuario_tb`
--

INSERT INTO `usuario_tb` (`id_usuario`, `username`, `password`, `email`) VALUES
(1, 'admin', 'admin123', 'admin@admin.com'),
(2, 'Erika', '123456', 'erika@teste.com'),
(3, 'Roseli', '1234567', 'roseli@teste.com'),
(4, 'Jose', '987654', 'jose@teste.com');

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `funcionarios_tb`
--
ALTER TABLE `funcionarios_tb`
  ADD PRIMARY KEY (`id_funcionario`);

--
-- Índices de tabela `usuario_tb`
--
ALTER TABLE `usuario_tb`
  ADD PRIMARY KEY (`id_usuario`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `funcionarios_tb`
--
ALTER TABLE `funcionarios_tb`
  MODIFY `id_funcionario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `usuario_tb`
--
ALTER TABLE `usuario_tb`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
