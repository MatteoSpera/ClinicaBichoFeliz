-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 30/06/2023 às 01:17
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `clinica`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `animal`
--

CREATE TABLE `animal` (
  `id` int(11) NOT NULL,
  `nome` varchar(35) NOT NULL,
  `especie` int(2) NOT NULL,
  `condicao` int(2) NOT NULL,
  `dono` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Despejando dados para a tabela `animal`
--

INSERT INTO `animal` (`id`, `nome`, `especie`, `condicao`, `dono`) VALUES
(1, 'Bolt', 1, 3, 1),
(2, 'Atena', 2, 3, 2),
(4, 'Floquinho', 1, 1, 4),
(5, 'RodrigÃ£o', 4, 2, 7),
(6, 'Mingau', 2, 1, 5),
(7, 'Marfim', 4, 2, 3),
(8, 'Chovinista', 5, 2, 6);

-- --------------------------------------------------------

--
-- Estrutura para tabela `condicao`
--

CREATE TABLE `condicao` (
  `id` int(11) NOT NULL,
  `descricao` varchar(35) NOT NULL,
  `quantidade` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Despejando dados para a tabela `condicao`
--

INSERT INTO `condicao` (`id`, `descricao`, `quantidade`) VALUES
(1, 'Aguardando Consulta', 2),
(2, 'Sob Tratamento', 3),
(3, 'Alta', 2),
(4, 'Baixa', 0);

-- --------------------------------------------------------

--
-- Estrutura para tabela `especie`
--

CREATE TABLE `especie` (
  `id` int(11) NOT NULL,
  `descricao` varchar(35) NOT NULL,
  `quantidade` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Despejando dados para a tabela `especie`
--

INSERT INTO `especie` (`id`, `descricao`, `quantidade`) VALUES
(1, 'Cachorro', 2),
(2, 'Gato', 2),
(3, 'Sapo', 0),
(4, 'Touro de Rodeio', 2),
(5, 'Porco', 1);

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `senha` varchar(64) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Despejando dados para a tabela `usuario`
--

INSERT INTO `usuario` (`id`, `username`, `senha`, `email`) VALUES
(1, 'Matteo_Spera', '77806026e93a91efeb500b77150e3cf4832ded270b45f5a865c9794af1d81776', 'spera@fema.edu.br'),
(2, 'Felipe_Vissotto', '77806026e93a91efeb500b77150e3cf4832ded270b45f5a865c9794af1d81776', 'vissotto@fema.edu.br'),
(3, 'Almir', 'abcb132e23671c35eb2e8bbe3a4d7924a970c95d46ef676fdcbc64e1e272c0f4', 'camolesi@fema.edu.br'),
(4, 'Cebolino', '421ca016453d81af53eb6034d4d5d6a1d76e75dabce320cfe9ca9f025c431100', 'cebolino@limoeiro.com.br'),
(5, 'Maga_Lia', '2244d5176d93ca108f1e164b5a086139fec8bf2edadd88dd7cc47961d61df5fc', 'melancia@limoeiro.com.br'),
(6, 'Cascudo', 'bcfb66c96a2a12f8d129d86260a688faaf521d19491c2e739e04f206c071fad8', 'elcasco@limoeiro.com.br'),
(7, 'Fulano', '4bbd2c0202851e2506a6f19df1d5faa363e4f256b9f8cf73e281fa4756c82679', 'fulano@fulanoenterprise.com');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `animal`
--
ALTER TABLE `animal`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `condicao`
--
ALTER TABLE `condicao`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `especie`
--
ALTER TABLE `especie`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `animal`
--
ALTER TABLE `animal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de tabela `condicao`
--
ALTER TABLE `condicao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `especie`
--
ALTER TABLE `especie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
