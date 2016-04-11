-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 11-Abr-2016 às 19:00
-- Versão do servidor: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `rep-sis`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `administrador`
--

CREATE TABLE IF NOT EXISTS `administrador` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(65) NOT NULL,
  `login` varchar(65) NOT NULL,
  `senha` varchar(65) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `administrador`
--

INSERT INTO `administrador` (`id`, `nome`, `login`, `senha`) VALUES
(1, 'Administrador Padrão', '21232f297a57a5a743894a0e4a801fc3', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Estrutura da tabela `empresa`
--

CREATE TABLE IF NOT EXISTS `empresa` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `razao_social` varchar(350) NOT NULL,
  `nome_fantasia` varchar(350) NOT NULL,
  `cnpj` varchar(20) NOT NULL,
  `ie` varchar(14) NOT NULL,
  `im` varchar(14) NOT NULL,
  `endereco` varchar(120) NOT NULL,
  `bairro` varchar(45) NOT NULL,
  `cidade` varchar(45) NOT NULL,
  `cep` varchar(10) NOT NULL,
  `uf` varchar(2) NOT NULL,
  `telefone` varchar(16) NOT NULL,
  `site` varchar(120) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `empresa`
--

INSERT INTO `empresa` (`id`, `razao_social`, `nome_fantasia`, `cnpj`, `ie`, `im`, `endereco`, `bairro`, `cidade`, `cep`, `uf`, `telefone`, `site`) VALUES
(1, 'Teste Ltda.', 'Teste', '12.945.644-0001-31', '498516', '3215', 'Rua Joinville, 2277', 'São Pedro', 'São José dos Pinhais', '83.005-550', 'PR', '(41) 3058-2760', 'www.idealmotopecas.com');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
