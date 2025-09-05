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
-- Table structure for table `ai_qrcard`
--

CREATE TABLE `ai_qrcard` (
  `id` int(11) NOT NULL,
  `url` text NOT NULL,
  `address` text NOT NULL,
  `email` text NOT NULL,
  `phone` text NOT NULL,
  `map` text NOT NULL,
  `facebook` text NOT NULL,
  `instagram` text NOT NULL,
  `linkedin` text NOT NULL,
  `tiktok` text NOT NULL,
  `youtube` text NOT NULL,
  `x` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ai_qrcard`
--

INSERT INTO `ai_qrcard` (`id`, `url`, `address`, `email`, `phone`, `map`, `facebook`, `instagram`, `linkedin`, `tiktok`, `youtube`, `x`) VALUES
(1, 'masp', 'Av. Paulista, 1578 - Bela Vista, São Paulo - SP, 01310-200', 'ri@masp.org.br', '1131495959', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3657.19569737465!2d-46.65845682544648!3d-23.561413978799848!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce59ceb1eb771f%3A0xe904f6a669744da1!2sMuseu%20de%20Arte%20de%20S%C3%A3o%20Paulo%20Assis%20Chateaubriand!5e0!3m2!1spt-BR!2sbr!4v1757044031405!5m2!1spt-BR!2sbr', 'https://www.facebook.com/maspmuseu', 'https://instagram.com/masp', 'https://www.linkedin.com/company/museu-de-arte-de-s%C3%A3o-paulo-assis-chateaubriand---masp/', '#', 'https://www.youtube.com/channel/UCl_tZ6fP9TdaATguYYRC1XA', 'https://x.com/maspmuseu'),
(2, '', '', '', '', '', '', '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ai_qrcard`
--
ALTER TABLE `ai_qrcard`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ai_qrcard`
--
ALTER TABLE `ai_qrcard`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
