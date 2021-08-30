-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 17-Ago-2021 às 00:16
-- Versão do servidor: 10.1.38-MariaDB
-- versão do PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bd_anuncios`
--
CREATE DATABASE IF NOT EXISTS `bd_anuncios` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `bd_anuncios`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_categoria`
--

CREATE TABLE `tbl_categoria` (
  `cod_categoria` int(11) NOT NULL,
  `categoria` varchar(150) COLLATE utf8_bin NOT NULL,
  `categoria_data_hora` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `categoria_cadastrado_por` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_favoritos`
--

CREATE TABLE `tbl_favoritos` (
  `cod_favorito` int(11) NOT NULL,
  `favorito_usuario` int(11) NOT NULL,
  `favorito_produto` int(11) NOT NULL,
  `data_hora` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_login`
--

CREATE TABLE `tbl_login` (
  `cod_login` int(11) NOT NULL,
  `nome` varchar(150) COLLATE utf8_bin NOT NULL,
  `email` varchar(150) COLLATE utf8_bin NOT NULL,
  `senha` varchar(50) COLLATE utf8_bin NOT NULL,
  `foto` varchar(200) COLLATE utf8_bin DEFAULT NULL,
  `tipo_usuario` varchar(5) COLLATE utf8_bin DEFAULT NULL,
  `status_login` int(11) NOT NULL,
  `link_ativacao` varchar(150) COLLATE utf8_bin NOT NULL,
  `login_data_criacao` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `tbl_login`
--

INSERT INTO `tbl_login` (`cod_login`, `nome`, `email`, `senha`, `foto`, `tipo_usuario`, `status_login`, `link_ativacao`, `login_data_criacao`) VALUES
(1, 'Joao', 'email@email.com', '', NULL, NULL, 0, '', '2021-08-12 13:08:31');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_logs`
--

CREATE TABLE `tbl_logs` (
  `cod_log` int(11) NOT NULL,
  `acao` varchar(250) COLLATE utf8_bin NOT NULL,
  `data_hora` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_produto`
--

CREATE TABLE `tbl_produto` (
  `cod_produto` int(11) NOT NULL,
  `categoria_produto` int(11) NOT NULL,
  `nome_produto` varchar(150) COLLATE utf8_bin NOT NULL,
  `preco` float NOT NULL,
  `descricao` varchar(250) COLLATE utf8_bin NOT NULL,
  `imagem` varchar(250) COLLATE utf8_bin NOT NULL,
  `produto_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_categoria`
--
ALTER TABLE `tbl_categoria`
  ADD PRIMARY KEY (`cod_categoria`);

--
-- Indexes for table `tbl_favoritos`
--
ALTER TABLE `tbl_favoritos`
  ADD PRIMARY KEY (`cod_favorito`);

--
-- Indexes for table `tbl_login`
--
ALTER TABLE `tbl_login`
  ADD PRIMARY KEY (`cod_login`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `tbl_logs`
--
ALTER TABLE `tbl_logs`
  ADD PRIMARY KEY (`cod_log`);

--
-- Indexes for table `tbl_produto`
--
ALTER TABLE `tbl_produto`
  ADD PRIMARY KEY (`cod_produto`),
  ADD KEY `fk_categoria` (`categoria_produto`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_categoria`
--
ALTER TABLE `tbl_categoria`
  MODIFY `cod_categoria` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_favoritos`
--
ALTER TABLE `tbl_favoritos`
  MODIFY `cod_favorito` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_login`
--
ALTER TABLE `tbl_login`
  MODIFY `cod_login` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_logs`
--
ALTER TABLE `tbl_logs`
  MODIFY `cod_log` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_produto`
--
ALTER TABLE `tbl_produto`
  MODIFY `cod_produto` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `tbl_produto`
--
ALTER TABLE `tbl_produto`
  ADD CONSTRAINT `fk_categoria` FOREIGN KEY (`categoria_produto`) REFERENCES `tbl_categoria` (`cod_categoria`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
