-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 20 Oca 2018, 22:53:06
-- Sunucu sürümü: 10.1.29-MariaDB
-- PHP Sürümü: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `davetiye`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `davetiyelistesi`
--

CREATE TABLE `davetiyelistesi` (
  `id` int(11) NOT NULL,
  `Ad` varchar(30) NOT NULL,
  `Soyad` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `davetiyelistesi`
--

INSERT INTO `davetiyelistesi` (`id`, `Ad`, `Soyad`) VALUES
(9, 'MESUT', 'CAN'),
(14, 'MERT', 'BAY'),
(18, 'EMRAH', 'BAYKAL'),
(19, 'ERCAN', 'TEYMUR'),
(21, 'AZIZ', 'CAGLIN'),
(22, 'MEHMET ALI', 'BIRANT'),
(23, 'ONUR', 'DERE'),
(24, 'RAMAZAN', 'SONMEZ'),
(25, 'FERHAT', 'BELGE'),
(26, 'FIRAT', 'TASDELEN'),
(27, 'MUCAHIT', 'YASA');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `davetiyelistesi`
--
ALTER TABLE `davetiyelistesi`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `davetiyelistesi`
--
ALTER TABLE `davetiyelistesi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
