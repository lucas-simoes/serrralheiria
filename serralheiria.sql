-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 18-Ago-2017 às 15:44
-- Versão do servidor: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `serralheria`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

CREATE TABLE `clientes` (
  `clientesId` int(11) NOT NULL,
  `nome` varchar(80) COLLATE utf8_bin NOT NULL,
  `endereco` varchar(80) COLLATE utf8_bin DEFAULT NULL,
  `cidade` varchar(30) COLLATE utf8_bin DEFAULT NULL,
  `estado` varchar(2) COLLATE utf8_bin DEFAULT NULL,
  `email` varchar(40) COLLATE utf8_bin DEFAULT NULL,
  `telefone` int(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estrutura da tabela `materiais`
--

CREATE TABLE `materiais` (
  `materiaisId` int(11) NOT NULL,
  `nome` varchar(40) COLLATE utf8_bin NOT NULL,
  `unidade` varchar(2) COLLATE utf8_bin NOT NULL,
  `valor` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estrutura da tabela `orcamentos`
--

CREATE TABLE `orcamentos` (
  `orcamentosId` int(11) NOT NULL,
  `clientesId` int(11) DEFAULT NULL,
  `nomeCliente` varchar(80) COLLATE utf8_bin NOT NULL,
  `telefoneCliente` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  `validade` date DEFAULT NULL,
  `valorMaterial` float DEFAULT NULL,
  `valorMO` float DEFAULT NULL,
  `valorTotal` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estrutura da tabela `orc_itens`
--

CREATE TABLE `orc_itens` (
  `itensId` int(11) NOT NULL,
  `orcamentosId` int(11) NOT NULL,
  `materiaisId` int(11) NOT NULL,
  `quantidade` decimal(10,0) NOT NULL,
  `valorUnitario` float NOT NULL,
  `valorTotal` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `usuariosId` int(11) NOT NULL,
  `nome` varchar(80) COLLATE utf8_bin NOT NULL,
  `login` varchar(20) COLLATE utf8_bin NOT NULL,
  `senha` varchar(256) COLLATE utf8_bin NOT NULL,
  `email` varchar(40) COLLATE utf8_bin DEFAULT NULL,
  `telefone` varchar(20) COLLATE utf8_bin DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`clientesId`);

--
-- Indexes for table `materiais`
--
ALTER TABLE `materiais`
  ADD PRIMARY KEY (`materiaisId`);

--
-- Indexes for table `orcamentos`
--
ALTER TABLE `orcamentos`
  ADD PRIMARY KEY (`orcamentosId`);

--
-- Indexes for table `orc_itens`
--
ALTER TABLE `orc_itens`
  ADD PRIMARY KEY (`itensId`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`usuariosId`),
  ADD UNIQUE KEY `login` (`login`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clientes`
--
ALTER TABLE `clientes`
  MODIFY `clientesId` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `materiais`
--
ALTER TABLE `materiais`
  MODIFY `materiaisId` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `orcamentos`
--
ALTER TABLE `orcamentos`
  MODIFY `orcamentosId` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `orc_itens`
--
ALTER TABLE `orc_itens`
  MODIFY `itensId` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `usuariosId` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
