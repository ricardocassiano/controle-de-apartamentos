-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 22-Dez-2016 às 12:25
-- Versão do servidor: 5.6.27
-- PHP Version: 5.5.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cadastro_ricardo`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `apartamentos`
--

CREATE TABLE `apartamentos` (
  `cod` int(11) NOT NULL,
  `numero` int(4) NOT NULL,
  `bloco` varchar(1) NOT NULL,
  `dependencias` int(2) NOT NULL,
  `aquisicao` varchar(10) NOT NULL,
  `status` varchar(15) NOT NULL,
  `preco` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `apartamentos`
--
ALTER TABLE `apartamentos`
  ADD PRIMARY KEY (`cod`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `apartamentos`
--
ALTER TABLE `apartamentos`
  MODIFY `cod` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
