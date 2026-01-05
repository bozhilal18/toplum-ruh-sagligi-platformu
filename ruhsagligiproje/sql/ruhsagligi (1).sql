-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 04 Oca 2026, 23:08:59
-- Sunucu sürümü: 10.4.32-MariaDB
-- PHP Sürümü: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `ruhsagligi`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `iletisim`
--

CREATE TABLE `iletisim` (
  `id` int(11) NOT NULL,
  `ad` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `konu` varchar(100) DEFAULT NULL,
  `mesaj` text DEFAULT NULL,
  `tarih` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Tablo döküm verisi `iletisim`
--

INSERT INTO `iletisim` (`id`, `ad`, `email`, `konu`, `mesaj`, `tarih`) VALUES
(3, 'hilal boz', 'bozhilal18@gmail.com', 'Bilgi', 'aaaaaab', '2025-12-15 18:44:16'),
(4, 'gülhanım boz', 'gulhanim@gmail.com', 'Destek', 'aaaa', '2025-12-17 18:41:37'),
(5, 'umut boz', 'umutboz@gmail.com', 'Bilgi', 'aa', '2025-12-18 21:33:58'),
(6, 'umut', 'umutboz@mail.com', 'Bilgi', 'ssss', '2025-12-18 21:35:02'),
(7, 'Beytullah Daldaban', 'Beytullah.daldabann@gmail.com', 'Geri Bildirim', 'Destek istiyorum!', '2025-12-19 07:22:18'),
(8, 'agah 3', 'sxjsxj@mail.com', 'Bilgi', 'aaaa', '2025-12-19 09:32:00'),
(9, 'agah 7', 'bjhh@gmail.com', 'Bilgi', 'bbb', '2025-12-19 09:34:11');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `test_results`
--

CREATE TABLE `test_results` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `test_key` varchar(30) NOT NULL,
  `score` int(11) NOT NULL,
  `max_score` int(11) NOT NULL,
  `level` varchar(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Tablo döküm verisi `test_results`
--

INSERT INTO `test_results` (`id`, `user_id`, `test_key`, `score`, `max_score`, `level`, `created_at`) VALUES
(1, 1, 'anksiyete', 6, 10, 'orta', '2025-12-25 23:35:37'),
(2, 2, 'depresyon', 6, 10, 'orta', '2025-12-26 00:04:06'),
(3, 2, 'stres', 10, 10, 'yuksek', '2025-12-26 00:04:24');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(80) NOT NULL,
  `email` varchar(120) NOT NULL,
  `password_hash` varchar(255) NOT NULL,
  `role` varchar(20) NOT NULL DEFAULT 'user',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Tablo döküm verisi `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password_hash`, `role`, `created_at`) VALUES
(1, 'hilal boz', 'bozhilal18@gmail.com', '$2y$10$mhvp5vMAbzY38kQ15mCEi.kpwfevcG/ygh7hXnCd8Zft8Doi1Hh12', 'user', '2025-12-25 23:34:30'),
(2, 'umut boz', 'umutboz@gmail.com', '$2y$10$xt/1FgKVi0t7ntTt0ShesuadJEwDLSG.lCkedxMS5sAHrUwwln292', 'user', '2025-12-26 00:03:44');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `iletisim`
--
ALTER TABLE `iletisim`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `test_results`
--
ALTER TABLE `test_results`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Tablo için indeksler `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `iletisim`
--
ALTER TABLE `iletisim`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Tablo için AUTO_INCREMENT değeri `test_results`
--
ALTER TABLE `test_results`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Tablo için AUTO_INCREMENT değeri `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Dökümü yapılmış tablolar için kısıtlamalar
--

--
-- Tablo kısıtlamaları `test_results`
--
ALTER TABLE `test_results`
  ADD CONSTRAINT `test_results_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
