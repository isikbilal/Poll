-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 28 Şub 2019, 21:24:18
-- Sunucu sürümü: 10.1.13-MariaDB
-- PHP Sürümü: 7.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `anket_uygulama`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `anketler`
--

CREATE TABLE `anketler` (
  `id` int(11) NOT NULL,
  `kullaniciadi` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `tarih` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `anket_sorusu` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `s1` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `s2` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `s3` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `s4` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `s5` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `sc1` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `sc2` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `sc3` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `sc4` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `sc5` varchar(255) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `anketler`
--

INSERT INTO `anketler` (`id`, `kullaniciadi`, `tarih`, `anket_sorusu`, `s1`, `s2`, `s3`, `s4`, `s5`, `sc1`, `sc2`, `sc3`, `sc4`, `sc5`) VALUES
(1, 'admin', '0000-00-00 00:00:00', 'AÅŸaÄŸÄ±dakilerden hangisi yukarÄ±dadÄ±r', 'a', 'b', 'c', 'd', 'e', '11', '2', '1', '3', '1'),
(10, 'admin', '2019-02-06 20:29:25', 'ADMÄ°N ANKETÄ°', 'A', 'b', 'C', 'D', 'e', '2', '1', '2', '1', ''),
(11, 'admin', '2019-02-06 20:30:09', 'bir anket', '1', '2', '3', '4', '5', '7', '', '', '', ''),
(12, 'admin', '2019-02-06 20:30:23', 'bir anket', '1', '2', '3', '4', '5', '7', '', '', '', ''),
(13, 'admin', '2019-02-06 20:30:42', 'aga', 'be', 'ne', 'o', 'gi', 'no', '10', '', '', '1', ''),
(14, 'admin', '2019-02-06 20:30:54', 'aga', 'be', 'ne', 'o', 'gi', 'no', '10', '', '', '1', ''),
(15, 'admin', '2019-02-06 20:31:02', 'aga', 'be', 'ne', 'o', 'gi', 'no', '10', '', '', '1', ''),
(16, 'bilal', '2019-02-06 21:59:21', 'bilalin anketi', 'asda', 'asd', 'asd', 'asd', 'asd', '', '10', '', '', ''),
(17, 'admin', '0000-00-00 00:00:00', 'Yeni anket sorusu?', 'yeni1', 'yeni2', 'yeni3', 'yeni4', 'yeni5', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `oy_kullananlar`
--

CREATE TABLE `oy_kullananlar` (
  `id` int(11) NOT NULL,
  `kul_id` int(11) NOT NULL,
  `anket_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `oy_kullananlar`
--

INSERT INTO `oy_kullananlar` (`id`, `kul_id`, `anket_id`) VALUES
(1, 1, 1),
(2, 2, 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `kullaniciadi` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `sifre` varchar(255) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `users`
--

INSERT INTO `users` (`id`, `kullaniciadi`, `sifre`) VALUES
(1, 'admin', '202cb962ac59075b964b07152d234b70'),
(2, 'bilal', '202cb962ac59075b964b07152d234b70');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `anketler`
--
ALTER TABLE `anketler`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `oy_kullananlar`
--
ALTER TABLE `oy_kullananlar`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `anketler`
--
ALTER TABLE `anketler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Tablo için AUTO_INCREMENT değeri `oy_kullananlar`
--
ALTER TABLE `oy_kullananlar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
