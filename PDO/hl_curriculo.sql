-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 29-Ago-2019 às 22:14
-- Versão do servidor: 10.4.6-MariaDB
-- versão do PHP: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `hl_curriculo`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `pessoa`
--

CREATE TABLE `pessoa` (
  `id_pessoa` int(10) NOT NULL,
  `nome_pessoa` varchar(200) NOT NULL,
  `estado_civil` varchar(100) NOT NULL,
  `genero` varchar(100) NOT NULL,
  `data_nasc` varchar(100) NOT NULL,
  `pcd` varchar(3) NOT NULL,
  `tipo_deficiencia` varchar(100) DEFAULT NULL,
  `CPF` varchar(100) NOT NULL,
  `PIS` varchar(100) NOT NULL,
  `carteira_trabalho` varchar(100) NOT NULL,
  `serie` int(10) NOT NULL,
  `titulo_eleitor` varchar(100) NOT NULL,
  `RG` varchar(100) NOT NULL,
  `orgao_emissor_rg` varchar(50) NOT NULL,
  `UF` varchar(100) NOT NULL,
  `data_emisao_rg` varchar(100) NOT NULL,
  `nacionalidade` varchar(100) NOT NULL,
  `naturalidade` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `pessoa`
--

INSERT INTO `pessoa` (`id_pessoa`, `nome_pessoa`, `estado_civil`, `genero`, `data_nasc`, `pcd`, `tipo_deficiencia`, `CPF`, `PIS`, `carteira_trabalho`, `serie`, `titulo_eleitor`, `RG`, `orgao_emissor_rg`, `UF`, `data_emisao_rg`, `nacionalidade`, `naturalidade`) VALUES
(1, 'Claudio', 'Solteiro', 'Masc', '12-15-1985', 'não', NULL, '078895456-98', '12345678961', '123654789855654', 12354, '12365478895', '1236547896', 'ssp/rs', 'rs', '12-12-1990', 'Brasileiro', 'Porto Alegre');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo_usuario`
--

CREATE TABLE `tipo_usuario` (
  `id_tipo_usuario` int(10) NOT NULL,
  `tipo_usuario` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tipo_usuario`
--

INSERT INTO `tipo_usuario` (`id_tipo_usuario`, `tipo_usuario`) VALUES
(1, 'administrador'),
(2, 'normal'),
(3, 'Outros'),
(4, 'mais uma'),
(5, 'Registrador');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(10) NOT NULL,
  `nome_usuario` varchar(200) NOT NULL,
  `email_usuario` varchar(100) NOT NULL,
  `senha_usuario` varchar(50) NOT NULL,
  `id_tipo_usuario` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nome_usuario`, `email_usuario`, `senha_usuario`, `id_tipo_usuario`) VALUES
(9, 'Felipe Ricardo Silveira Abbud', 'feabbud@gmail.com', '202cb962ac59075b964b07152d234b70', 1);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `pessoa`
--
ALTER TABLE `pessoa`
  ADD PRIMARY KEY (`id_pessoa`);

--
-- Índices para tabela `tipo_usuario`
--
ALTER TABLE `tipo_usuario`
  ADD PRIMARY KEY (`id_tipo_usuario`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `pessoa`
--
ALTER TABLE `pessoa`
  MODIFY `id_pessoa` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `tipo_usuario`
--
ALTER TABLE `tipo_usuario`
  MODIFY `id_tipo_usuario` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
