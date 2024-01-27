-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 27/01/2024 às 20:50
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `deluxuniformespro-bd`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `cadastros`
--

CREATE TABLE `cadastros` (
  `id_usuario` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `email` varchar(254) NOT NULL,
  `senha` varchar(16) NOT NULL,
  `numero` varchar(14) NOT NULL,
  `uf` char(2) NOT NULL,
  `cep` int(8) NOT NULL,
  `endereco` varchar(100) NOT NULL,
  `tipo_cadastro` enum('Usuario','Administrador','','') NOT NULL COMMENT '1 - Usuario / 2 - Administrador',
  `carrinho` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `cadastros`
--

INSERT INTO `cadastros` (`id_usuario`, `nome`, `email`, `senha`, `numero`, `uf`, `cep`, `endereco`, `tipo_cadastro`, `carrinho`) VALUES
(3, 'Marcos', 'marcosantony.asp@gmail.com', '181143/marcola', '21964986068', 'RJ', 2147483647, 'Rua do Adm Nova Iguaçu', 'Administrador', ''),
(5, 'Victor', 'v@k.co', '1234', '23214124423423', 'RJ', 32421434, 'efefesfefssf', 'Usuario', '');

-- --------------------------------------------------------

--
-- Estrutura para tabela `carrinhos`
--

CREATE TABLE `carrinhos` (
  `id_carrinho` int(11) NOT NULL,
  `id_pedido` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `produtos`
--

CREATE TABLE `produtos` (
  `id_produto` int(11) NOT NULL,
  `descricao` varchar(500) NOT NULL,
  `imagem` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `cadastros`
--
ALTER TABLE `cadastros`
  ADD PRIMARY KEY (`id_usuario`);

--
-- Índices de tabela `carrinhos`
--
ALTER TABLE `carrinhos`
  ADD PRIMARY KEY (`id_carrinho`);

--
-- Índices de tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id_produto`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cadastros`
--
ALTER TABLE `cadastros`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `carrinhos`
--
ALTER TABLE `carrinhos`
  MODIFY `id_carrinho` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id_produto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;