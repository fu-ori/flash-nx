-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 05, 2025 at 08:12 AM
-- Server version: 10.11.10-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u193613732_spray`
--

-- --------------------------------------------------------

--
-- Table structure for table `ai_faq`
--

CREATE TABLE `ai_faq` (
  `id` int(11) NOT NULL,
  `url` text NOT NULL,
  `ask` text NOT NULL,
  `response` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ai_faq`
--

INSERT INTO `ai_faq` (`id`, `url`, `ask`, `response`) VALUES
(1, 'masp', 'Qual o horário de funcionamento?', 'Terça grátis: 10-20h (entrada até às 19h) Quarta, quinta, sábado e domingo: 10-18h (entrada até às 17h) Sexta: 10h-21h | gratuidade das 18h-21h (entrada até às 20h) Fechado às segundas'),
(2, 'masp', 'Qual linha de metrô, mais próxima do MASP?', 'A estação de metrô mais próxima do MASP (Museu de Arte de São Paulo) é a Estação Trianon-Masp, que faz parte da Linha 2-Verde do Metrô de São Paulo. Ela está localizada na Avenida Paulista, em frente ao museu.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ai_faq`
--
ALTER TABLE `ai_faq`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ai_faq`
--
ALTER TABLE `ai_faq`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
