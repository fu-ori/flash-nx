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
-- Table structure for table `ai_bio`
--

CREATE TABLE `ai_bio` (
  `id` int(11) NOT NULL,
  `url` text NOT NULL,
  `title` text NOT NULL,
  `photo` text NOT NULL,
  `bio` text NOT NULL,
  `publi` text NOT NULL,
  `contact` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ai_bio`
--

INSERT INTO `ai_bio` (`id`, `url`, `title`, `photo`, `bio`, `publi`, `contact`) VALUES
(1, 'masp', 'Dois prédios. Um museu. Descubra o novo MASP.', 'https://cdn.spray.sampa.br/masp/avatar.webp', 'O MASP é um museu super famoso em São Paulo, fácil de reconhecer por seu prédio com o vão livre (aquele espaço enorme embaixo). Lá dentro, tem um montão de obras de arte incríveis de vários lugares e épocas. É um lugar para todo mundo curtir e aprender sobre arte!', 'Você deve visitar o MASP hoje para uma experiência cultural incrível. O museu possui um acervo deslumbrante com obras de mestres como Van Gogh e Monet, além de arte brasileira. A arquitetura icônica de Lina Bo Bardi é um espetáculo à parte. É uma chance de se inspirar e aprender em um dos museus mais importantes da América Latina.  Aproveite para ver de perto as famosas exposições que utilizam os cavaletes de vidro, uma invenção revolucionária que permite que as obras de arte pareçam flutuar no espaço. Este design único, somado ao vasto vão livre de 74 metros, transforma o prédio em uma verdadeira obra de arte em si mesmo. ', 'tel:1131495959'),
(2, '', '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ai_bio`
--
ALTER TABLE `ai_bio`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ai_bio`
--
ALTER TABLE `ai_bio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
