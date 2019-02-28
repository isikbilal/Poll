-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 07 Haz 2016, 14:46:16
-- Sunucu sürümü: 5.6.16
-- PHP Sürümü: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Veritabanı: `anket`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanicilar`
--

CREATE TABLE IF NOT EXISTS `kullanicilar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kullanici_adi` varchar(150) DEFAULT NULL,
  `sifre` int(150) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Tablo döküm verisi `kullanicilar`
--

INSERT INTO `kullanicilar` (`id`, `kullanici_adi`, `sifre`) VALUES
(1, 'admin', 123);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `secenekler`
--

CREATE TABLE IF NOT EXISTS `secenekler` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `soru_id` int(150) DEFAULT NULL,
  `secenek` varchar(250) DEFAULT NULL,
  `puan` int(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=26 ;

--
-- Tablo döküm verisi `secenekler`
--

INSERT INTO `secenekler` (`id`, `soru_id`, `secenek`, `puan`) VALUES
(1, 1, 'Ä°stanbul', 1),
(2, 1, 'Ankara', 0),
(3, 1, 'Trabzon', 5),
(4, 1, 'Konya', 1),
(5, 1, 'Kars', 4),
(6, 4, '2', 3),
(7, 4, '25', 2),
(8, 4, '15', 3),
(9, 4, '47', 3),
(10, 4, '53', 5),
(16, 6, 'FenerbahÃ§e', 3),
(17, 6, 'Galatasaray', 0),
(18, 6, 'BeÅŸiktaÅŸ', 1),
(19, 6, 'Trabzonspor', 4),
(20, 6, 'Ã‡erkezkÃ¶yspor', 15),
(21, 7, 'Ä°stanbul', 0),
(22, 7, 'Bursa', 0),
(23, 7, 'Kars', 2),
(24, 7, 'TakirdaÄŸ', 3),
(25, 7, 'Ankara', 5);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sorular`
--

CREATE TABLE IF NOT EXISTS `sorular` (
  `soru_id` int(11) NOT NULL AUTO_INCREMENT,
  `soru` text NOT NULL,
  `secenek1` varchar(250) DEFAULT NULL,
  `secenek2` varchar(250) DEFAULT NULL,
  `secenek3` varchar(250) DEFAULT NULL,
  `secenek4` varchar(250) DEFAULT NULL,
  `secenek5` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`soru_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Tablo döküm verisi `sorular`
--

INSERT INTO `sorular` (`soru_id`, `soru`, `secenek1`, `secenek2`, `secenek3`, `secenek4`, `secenek5`) VALUES
(1, 'En BÃ¼yÃ¼k Ä°l Hangisi ?', 'Ä°stanbul', 'Ankara', 'Trabzon', 'Konya', 'Kars'),
(4, 'Hangisi Ã‡ift SayÄ±dÄ±r ?', '2', '25', '15', '47', '53'),
(6, 'En BÃ¼yÃ¼k TakÄ±m Kim', 'FenerbahÃ§e', 'Galatasaray', 'BeÅŸiktaÅŸ', 'Trabzonspor', 'Ã‡erkezkÃ¶yspor'),
(7, 'TÃ¼rkiyenin BaÅŸkenti Neresidir', 'Ä°stanbul', 'Bursa', 'Kars', 'TakirdaÄŸ', 'Ankara');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
