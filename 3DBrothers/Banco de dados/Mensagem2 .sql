-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 11/02/2019 às 18:58
-- Versão do servidor: 10.1.37-MariaDB
-- Versão do PHP: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `Mensagem2`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `Fotos`
--

CREATE TABLE `Fotos` (
  `CodFoto` bigint(20) NOT NULL,
  `Imagem` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `Fotos`
--
<<<<<<< HEAD
-- --------------------------------------------------------

=======
>>>>>>> 8f5c599d498b73b8842d1725cd62b8910f41600a
--
-- Estrutura para tabela `Ocorrencia`
--

CREATE TABLE `Ocorrencia` (
  `CodOcorrencia` bigint(20) NOT NULL,
  `Nome` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Telefone` bigint(20) NOT NULL,
  `Mensagem` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `Ocorrencia`
--
<<<<<<< HEAD


=======
>>>>>>> 8f5c599d498b73b8842d1725cd62b8910f41600a
--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `Fotos`
--
ALTER TABLE `Fotos`
  ADD PRIMARY KEY (`CodFoto`);

--
-- Índices de tabela `Ocorrencia`
--
ALTER TABLE `Ocorrencia`
  ADD PRIMARY KEY (`CodOcorrencia`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `Fotos`
--
ALTER TABLE `Fotos`
  MODIFY `CodFoto` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `Ocorrencia`
--
ALTER TABLE `Ocorrencia`
  MODIFY `CodOcorrencia` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
