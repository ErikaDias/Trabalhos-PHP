-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 09/11/2020 às 20:53
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
-- Banco de dados: `musicas_bd`
--
CREATE DATABASE IF NOT EXISTS `musicas_bd` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE `musicas_bd`;

-- --------------------------------------------------------

--
-- Estrutura para tabela `musicas_tb`
--

CREATE TABLE `musicas_tb` (
  `id` int(11) NOT NULL,
  `titulo` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cantor` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `genero` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ano` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `musicas_tb`
--

INSERT INTO `musicas_tb` (`id`, `titulo`, `cantor`, `genero`, `ano`) VALUES
(2, 'Lôra', 'Tiago Iorc', 'Folk pop rock alternativo', 2019),
(4, 'Without Me', 'Halsey', 'Pop', 2019),
(5, 'Dreams', 'Fleetwood Mac', 'Rock ', 1977),
(6, 'Formation', 'Beyoncé', 'Rhythm and blues', 2016);

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `musicas_tb`
--
ALTER TABLE `musicas_tb`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `musicas_tb`
--
ALTER TABLE `musicas_tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
