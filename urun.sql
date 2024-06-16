-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 29, 2024 at 08:26 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `urun`
--

-- --------------------------------------------------------

--
-- Table structure for table `enust`
--

CREATE TABLE `enust` (
  `id` int(11) NOT NULL,
  `img` varchar(255) DEFAULT NULL,
  `telefon` varchar(255) DEFAULT NULL,
  `btnYazi` varchar(255) DEFAULT NULL,
  `slogan` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `enust`
--

INSERT INTO `enust` (`id`, `img`, `telefon`, `btnYazi`, `slogan`) VALUES
(1, './foto/resim1.png', 'İphone XS', 'Ayrıntılara Bak!', 'Dünyanızı Değiştirecek bir telefon...');

-- --------------------------------------------------------

--
-- Table structure for table `fiyat`
--

CREATE TABLE `fiyat` (
  `id` int(11) NOT NULL,
  `fiyatSecenek` varchar(255) DEFAULT NULL,
  `secenekAlt` varchar(255) DEFAULT NULL,
  `ozelligi1` varchar(255) DEFAULT NULL,
  `ozelligi2` varchar(255) DEFAULT NULL,
  `ozelligi3` varchar(255) DEFAULT NULL,
  `ozelligi4` varchar(255) DEFAULT NULL,
  `fiyati` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fiyat`
--

INSERT INTO `fiyat` (`id`, `fiyatSecenek`, `secenekAlt`, `ozelligi1`, `ozelligi2`, `ozelligi3`, `ozelligi4`, `fiyati`) VALUES
(1, 'Düşük', 'Düşük Düzey Modeli', '64 GB RAM', 'LCD EKRAN', '4 GB RAM', 'Ön Kamera : 2MP', '1500'),
(2, 'Orta', 'Orta Düzey Modeli', '128 GB RAM', 'OLED EKRAN', '8 GB RAM', 'Ön Kamera : 12MP', '2500'),
(3, 'Yüksek', 'Yüksek Düzey Modeli', '256 GB RAM', 'AMOLED EKRAN', '16 GB RAM', 'Ön Kamera : 20MP', '5000');

-- --------------------------------------------------------

--
-- Table structure for table `mail`
--

CREATE TABLE `mail` (
  `id` int(11) NOT NULL,
  `eMail` varchar(255) DEFAULT NULL,
  `sifre` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mail`
--

INSERT INTO `mail` (`id`, `eMail`, `sifre`) VALUES
(1, 'aaa@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `neden`
--

CREATE TABLE `neden` (
  `id` int(11) NOT NULL,
  `img` varchar(255) DEFAULT NULL,
  `baslikNeden` varchar(255) DEFAULT NULL,
  `yazi` varchar(255) DEFAULT NULL,
  `btnAciklama` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `neden`
--

INSERT INTO `neden` (`id`, `img`, `baslikNeden`, `yazi`, `btnAciklama`) VALUES
(1, 'web.jpg', 'Neden Biz?', 'Biz en iyi şekilde sizi anlayıp sizin sorunlarınızı kökten çözmek istiyoruz. Sorunlarınızı Çözüp en iyi telefonu kullanmanızı veya en iyi şekilde annenize kardeşinize veya arkadaşına ulaşıp onlarla iletişimden mahrum kalmamanızı istiyoruz.', 'Fiyatlara Bak');

-- --------------------------------------------------------

--
-- Table structure for table `ozellikler`
--

CREATE TABLE `ozellikler` (
  `id` int(11) NOT NULL,
  `altBaslik` varchar(255) DEFAULT NULL,
  `baslik` varchar(255) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `ozellik1` varchar(255) DEFAULT NULL,
  `ozellik2` varchar(255) DEFAULT NULL,
  `ozellik3` varchar(255) DEFAULT NULL,
  `ozellik4` varchar(255) DEFAULT NULL,
  `ozellik5` varchar(255) DEFAULT NULL,
  `ozellik6` varchar(255) DEFAULT NULL,
  `ozellik7` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ozellikler`
--

INSERT INTO `ozellikler` (`id`, `altBaslik`, `baslik`, `img`, `ozellik1`, `ozellik2`, `ozellik3`, `ozellik4`, `ozellik5`, `ozellik6`, `ozellik7`) VALUES
(1, 'Telefon Ayrıntıları', 'Özellikler', 'resim2.png', 'Apple A12 Bionic', '5.8 İNÇ', '256GB', '12MP', '7MP', '2 Saat', 'Apple İOS');

-- --------------------------------------------------------

--
-- Table structure for table `yorum`
--

CREATE TABLE `yorum` (
  `id` int(11) NOT NULL,
  `profilFoto` varchar(255) DEFAULT NULL,
  `isim` varchar(255) DEFAULT NULL,
  `yorumYazisi` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `yorum`
--

INSERT INTO `yorum` (`id`, `profilFoto`, `isim`, `yorumYazisi`) VALUES
(47, './foto/yorumFoto1.jpg', 'Ercan', 'Merhaba telefonunuzu çok beğendim. çok hızlı stabil ve kullanışlı. diğer telefonlar gibi her şeye reklam koymuyor. çok hoş bir telefon.'),
(48, './foto/yorumFoto2.jpg', 'Aslan', 'Telefonunuz çok mükemmel. böyle bir şey görmedim nasıl övsem hiç bilemedim çünkü övülecek çok yanı var...'),
(49, './foto/yorumFoto3.jpg', 'Yakup', 'Bir arkadaşım bu telefonu önerdi çok araştırmam sonucu almaya karar verdim ve aldım. şuanlık çok mutluyum ve çok memnun kaldım. hadi hayırlısı');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `enust`
--
ALTER TABLE `enust`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fiyat`
--
ALTER TABLE `fiyat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mail`
--
ALTER TABLE `mail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `neden`
--
ALTER TABLE `neden`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ozellikler`
--
ALTER TABLE `ozellikler`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `yorum`
--
ALTER TABLE `yorum`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `enust`
--
ALTER TABLE `enust`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `fiyat`
--
ALTER TABLE `fiyat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `mail`
--
ALTER TABLE `mail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `neden`
--
ALTER TABLE `neden`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ozellikler`
--
ALTER TABLE `ozellikler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `yorum`
--
ALTER TABLE `yorum`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
