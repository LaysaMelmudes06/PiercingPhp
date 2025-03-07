-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 22-Jun-2023 às 21:42
-- Versão do servidor: 10.4.22-MariaDB
-- versão do PHP: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bdjoias`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `email`
--

CREATE TABLE `email` (
  `idEmail` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `autor` varchar(100) NOT NULL,
  `comentario` varchar(100) NOT NULL,
  `resposta` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `email`
--

INSERT INTO `email` (`idEmail`, `email`, `autor`, `comentario`, `resposta`) VALUES
(1, 'laysamelmudes@gmail.com', 'Laysa', 'eita eita', ''),
(2, 'laysamelmudes@gmail.com', 'Laysa', 'lalalalallaa', ''),
(3, 'laysamelmudes@gmail.com', 'Laysa', 'Muito ruim', ''),
(4, 'laysamelmudes@gmail.com', 'Laysa', '', ''),
(5, 'alalalalalalaa', '', '', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbdepoimento`
--

CREATE TABLE `tbdepoimento` (
  `idDepoimento` int(11) NOT NULL,
  `tipo` varchar(10) NOT NULL,
  `autor` varchar(100) NOT NULL,
  `depoimento` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tbdepoimento`
--

INSERT INTO `tbdepoimento` (`idDepoimento`, `tipo`, `autor`, `depoimento`) VALUES
(12, 'Elogio', 'Laysa', 'daddad');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbgaleria`
--

CREATE TABLE `tbgaleria` (
  `idJoia` int(11) NOT NULL,
  `nomeJoia` varchar(100) NOT NULL,
  `categoriaJoia` varchar(30) NOT NULL,
  `marcaJoia` varchar(40) NOT NULL,
  `imgJoia` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tbgaleria`
--

INSERT INTO `tbgaleria` (`idJoia`, `nomeJoia`, `categoriaJoia`, `marcaJoia`, `imgJoia`) VALUES
(48, 'anel', 'Anel', 'Pandora', '01b6bdf973b5ad989c23bd69fc12dd6d.png'),
(49, 'brinco', 'Brinco', 'Pandora', '3110b56d03cb35355be0106a5c86ba01.png'),
(50, 'kitzin', 'Kits', 'Pandora', '5cb04441e2ea6f24a9abfa4bfe89feea.png'),
(51, 'pulseira', 'Pulseira', 'Pandora', '6f43601bb60669d2b3632acf60399bba.png');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbuser`
--

CREATE TABLE `tbuser` (
  `idUsuario` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `cpf` char(16) NOT NULL,
  `rg` int(12) NOT NULL,
  `senha` varchar(20) NOT NULL,
  `imgUser` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tbuser`
--

INSERT INTO `tbuser` (`idUsuario`, `nome`, `email`, `cpf`, `rg`, `senha`, `imgUser`) VALUES
(24, 'laysa', 'luiz@gmail.com', '', 0, '12345', '731900f11954a3ec94814acc2e8c9366.jpg'),
(25, 'Luciano', 'luciano@gmail.com', '11111111111', 111111111, '123', '587a18854f7a7245b198eee660a99f09.png'),
(26, 'teste1', '2@gmail.com', '222222', 222222222, '222', 'bae141c7bd42987f041e9884cb90bf47.jpg');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `email`
--
ALTER TABLE `email`
  ADD PRIMARY KEY (`idEmail`);

--
-- Índices para tabela `tbdepoimento`
--
ALTER TABLE `tbdepoimento`
  ADD PRIMARY KEY (`idDepoimento`);

--
-- Índices para tabela `tbgaleria`
--
ALTER TABLE `tbgaleria`
  ADD PRIMARY KEY (`idJoia`);

--
-- Índices para tabela `tbuser`
--
ALTER TABLE `tbuser`
  ADD PRIMARY KEY (`idUsuario`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `email`
--
ALTER TABLE `email`
  MODIFY `idEmail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `tbdepoimento`
--
ALTER TABLE `tbdepoimento`
  MODIFY `idDepoimento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de tabela `tbgaleria`
--
ALTER TABLE `tbgaleria`
  MODIFY `idJoia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT de tabela `tbuser`
--
ALTER TABLE `tbuser`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
