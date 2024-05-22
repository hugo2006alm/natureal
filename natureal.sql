-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: sql.freedb.tech
-- Tempo de geração: 22-Maio-2024 às 18:30
-- Versão do servidor: 8.0.36-0ubuntu0.22.04.1
-- versão do PHP: 8.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `freedb_natureal`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `amigos`
--

CREATE TABLE `amigos` (
  `id` int NOT NULL,
  `iduser` int NOT NULL,
  `iduser2` int NOT NULL,
  `estado` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `amigos`
--

INSERT INTO `amigos` (`id`, `iduser`, `iduser2`, `estado`) VALUES
(13, 13, 12, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `likes`
--

CREATE TABLE `likes` (
  `id` int NOT NULL,
  `data` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `iduser` int NOT NULL,
  `idpost` int NOT NULL,
  `tipo` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `posts`
--

CREATE TABLE `posts` (
  `id` int NOT NULL,
  `data` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `iduser` int NOT NULL,
  `foto` varchar(120) NOT NULL,
  `titulo` varchar(55) NOT NULL,
  `legenda` varchar(120) NOT NULL,
  `idtarefa` int NOT NULL,
  `niveltarefa` int NOT NULL,
  `coordenadas` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tarefas`
--

CREATE TABLE `tarefas` (
  `id` int NOT NULL,
  `dataparaaparecer` date NOT NULL,
  `nivel` int NOT NULL,
  `titulo` varchar(55) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `descricao` varchar(120) NOT NULL,
  `nomeespecie` varchar(120) NOT NULL,
  `foto` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `tarefas`
--

INSERT INTO `tarefas` (`id`, `dataparaaparecer`, `nivel`, `titulo`, `descricao`, `nomeespecie`, `foto`) VALUES
(2, '2024-04-17', 1, 'Columba livia', '1', 'Pombo-doméstico', 'pombo-comum.jpg'),
(3, '2024-04-17', 2, 'Larus fuscus', '2', 'Gaivota-d\'asa-escura', 'Gaivota-d\'asa-escura.jpeg'),
(4, '2024-04-17', 3, 'Parus major', '3', 'Chapim-real', 'chapim-real.jpeg'),
(5, '2024-04-14', 1, 'Columba livia', '1', 'Pombo-doméstico', 'pombo-comum.jpg'),
(6, '2024-04-14', 2, 'Larus fuscus', '2', 'Gaivota-d\'asa-escura', 'Gaivota-d\'asa-escura.jpeg'),
(7, '2024-04-14', 3, 'Parus major', '3', 'Chapim-real', 'chapim-real.jpeg'),
(8, '2024-04-15', 1, 'Columba livia', '1', 'Pombo-doméstico', 'pombo-comum.jpg'),
(9, '2024-04-15', 2, 'Larus fuscus', '2', 'Gaivota-d\'asa-escura', 'Gaivota-d\'asa-escura.jpeg'),
(10, '2024-04-15', 3, 'Parus major', '3', 'Chapim-real', 'chapim-real.jpeg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `data` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `username` varchar(55) NOT NULL,
  `password` varchar(120) NOT NULL,
  `email` varchar(70) NOT NULL,
  `nome` varchar(55) NOT NULL,
  `foto` varchar(120) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT 'default.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `user`
--

INSERT INTO `user` (`id`, `data`, `username`, `password`, `email`, `nome`, `foto`) VALUES
(12, '2024-04-14 13:51:23', 'mjcosta', '$2y$10$1ZKm/cv9P7ELdjGorgHNnuvyIGoEouksOvQWKZ2NyWA7khIOG.Jlu', 'enzonascentess@gmail.com', 'MJC', 'default.png'),
(13, '2024-04-14 14:03:51', 'kodin', '$2y$10$.ykaFvWTuEJNb79d836Pu.T06mS.chLp3tgcGKTlN0R7Dy0tHAdeO', 'dinisjcorreia@icloud.com', 'Dinis', 'user_13.jpg'),
(14, '2024-04-14 17:00:04', 'hugo2006alm', '$2y$10$IzVpC7NUFDrMDPb0/jtUGuGj/CT7MNhxMEa1VOlb6JFhtOT5s1sPG', 'hugo2006almeida2006@gmail.com', 'Hugo', 'default.png');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `amigos`
--
ALTER TABLE `amigos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tarefas`
--
ALTER TABLE `tarefas`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `amigos`
--
ALTER TABLE `amigos`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de tabela `likes`
--
ALTER TABLE `likes`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=187;

--
-- AUTO_INCREMENT de tabela `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT de tabela `tarefas`
--
ALTER TABLE `tarefas`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
