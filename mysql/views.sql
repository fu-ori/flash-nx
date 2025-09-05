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
-- Table structure for table `views`
--

CREATE TABLE `views` (
  `id` int(11) NOT NULL,
  `view` text NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `views`
--

INSERT INTO `views` (`id`, `view`, `content`) VALUES
(1, 'checkout', '<div>\n<h1>Pagamento Digital</h1><p><br></p>\n</div>\n<h3 class=\"\">Opção 1 - Pague com Pix de forma rápida e segura usando o QR Code!</h3><p><br></p><p><img src=\"data:image/png;base64,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\" style=\"width: 177.203px; height: 177.203px;\"></p><p><br></p><p>É super fácil e prático. Siga os passos:</p><ol><li>Abra o aplicativo do seu banco ou carteira digital (Nubank, PicPay, etc.).</li><li>E<span style=\"font-family: -apple-system, BlinkMacSystemFont, \" segoe=\"\" ui\",=\"\" roboto,=\"\" oxygen-sans,=\"\" ubuntu,=\"\" cantarell,=\"\" \"helvetica=\"\" neue\",=\"\" sans-serif;\"=\"\">scolha a opção&nbsp;</span><b style=\"font-family: -apple-system, BlinkMacSystemFont, \" segoe=\"\" ui\",=\"\" roboto,=\"\" oxygen-sans,=\"\" ubuntu,=\"\" cantarell,=\"\" \"helvetica=\"\" neue\",=\"\" sans-serif;\"=\"\">\"Pagar com QR Code\"</b><span style=\"font-family: -apple-system, BlinkMacSystemFont, \" segoe=\"\" ui\",=\"\" roboto,=\"\" oxygen-sans,=\"\" ubuntu,=\"\" cantarell,=\"\" \"helvetica=\"\" neue\",=\"\" sans-serif;\"=\"\">&nbsp;ou&nbsp;</span><b style=\"font-family: -apple-system, BlinkMacSystemFont, \" segoe=\"\" ui\",=\"\" roboto,=\"\" oxygen-sans,=\"\" ubuntu,=\"\" cantarell,=\"\" \"helvetica=\"\" neue\",=\"\" sans-serif;\"=\"\">\"Pix QR Code\"</b><span style=\"font-family: -apple-system, BlinkMacSystemFont, \" segoe=\"\" ui\",=\"\" roboto,=\"\" oxygen-sans,=\"\" ubuntu,=\"\" cantarell,=\"\" \"helvetica=\"\" neue\",=\"\" sans-serif;\"=\"\">.</span></li><li>Aponte a câmera do seu celular para o QR Code que aparece na tela.</li><li>Confirme o valor e finalize o pagamento.</li></ol><p><br></p><h3 class=\"\">Opção 2 - Pague com a Chave Pix e confirme seu pedido em segundos!</h3><p><br></p><p>Chave pix:&nbsp;<span style=\"background-color: rgb(18, 18, 18); color: rgba(255, 255, 255, 0.9); font-family: \" c6=\"\" sans=\"\" display\",=\"\" -apple-system,=\"\" blinkmacsystemfont,=\"\" \"segoe=\"\" ui\",=\"\" roboto,=\"\" \"helvetica=\"\" neue\",=\"\" arial,=\"\" sans-serif,=\"\" \"apple=\"\" color=\"\" emoji\",=\"\" ui=\"\" symbol\";=\"\" font-size:=\"\" 24px;=\"\" font-weight:=\"\" 600;\"=\"\">59.717.367/0001-73</span></p><p><br></p><p>Prefere copiar e colar a chave? Sem problema!</p><p></p><ol><li>Copie a chave pix (cnpj)</li><li>Abra o aplicativo do seu banco ou carteira digital.</li><li>Escolha a opção <b>\"Pix Copia e Cola\"</b> ou <b>\"Transferir por Chave Pix\"</b>.</li><li>Cole a chave que você copiou e confirme o pagamento.</li></ol><p><br></p><h3>Opção 3 - Não quer pagar com Pix? Sem problemas!</h3><p><br></p><p>Sabemos que o Pix é o jeito mais rápido, mas se precisar de outra forma de pagamento, é só falar com a gente.</p><p>Clique no link abaixo ou entre em contato pelo nosso WhatsApp para conhecer as outras opções disponíveis.</p><ul><li><p><a href=\"https://wa.me/5511951212811\" target=\"_blank\">Clique aqui para chamar uma ser humano no whatsapp, agora</a></p><p><br></p></li></ul><p>Estamos aqui para te ajudar!</p><p><br></p><p><br></p><h3>EXTRA!</h3><p><br></p><p>Se você tem uma conta no C6 Bank o pagamento é ainda mais rápido!</p><p><a href=\"https://cobranca.c6pix.com.br/01K3KDK7QZ3X3GEDDY79E8ZC19\" target=\"_blank\">https://cobranca.c6pix.com.br/01K3KDK7QZ3X3GEDDY79E8ZC19</a></p>'),
(2, 'landingpage', '<h1 class=\"\">Landing Page Spray</h1><h2 class=\"\">Atualizando...</h2><p>Em breve.</p><p><br></p>');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `views`
--
ALTER TABLE `views`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `views`
--
ALTER TABLE `views`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
