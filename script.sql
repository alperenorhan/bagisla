-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 17 Haz 2021, 04:09:39
-- Sunucu sürümü: 10.4.18-MariaDB
-- PHP Sürümü: 8.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `webtabanliquiz9`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `bagis`
--

CREATE TABLE `bagis` (
  `Bagis_Adi` varchar(64) NOT NULL,
  `Bagis_No` int(11) NOT NULL,
  `Bagis_Kurum` varchar(256) NOT NULL,
  `Bagis_Miktari` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanici`
--

CREATE TABLE `kullanici` (
  `Kullanici_Ad` varchar(64) NOT NULL,
  `Kullanici_Soyad` varchar(64) NOT NULL,
  `Kullanici_Mail` varchar(128) NOT NULL,
  `Kullanici_Sifre` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanici_bagis`
--

CREATE TABLE `kullanici_bagis` (
  `Bagis_Adi` varchar(64) NOT NULL,
  `Kullanici_Mail` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `bagis`
--
ALTER TABLE `bagis`
  ADD PRIMARY KEY (`Bagis_Adi`),
  ADD KEY `Bagis_No` (`Bagis_No`);

--
-- Tablo için indeksler `kullanici`
--
ALTER TABLE `kullanici`
  ADD PRIMARY KEY (`Kullanici_Mail`);

--
-- Tablo için indeksler `kullanici_bagis`
--
ALTER TABLE `kullanici_bagis`
  ADD KEY `Bagis_Adi` (`Bagis_Adi`),
  ADD KEY `Kullanici_Mail` (`Kullanici_Mail`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `bagis`
--
ALTER TABLE `bagis`
  MODIFY `Bagis_No` int(11) NOT NULL AUTO_INCREMENT;

--
-- Dökümü yapılmış tablolar için kısıtlamalar
--

--
-- Tablo kısıtlamaları `kullanici_bagis`
--
ALTER TABLE `kullanici_bagis`
  ADD CONSTRAINT `kullanici_bagis_ibfk_1` FOREIGN KEY (`Bagis_Adi`) REFERENCES `bagis` (`Bagis_Adi`),
  ADD CONSTRAINT `kullanici_bagis_ibfk_2` FOREIGN KEY (`Kullanici_Mail`) REFERENCES `kullanici` (`Kullanici_Mail`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
