-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1:3306
-- Üretim Zamanı: 25 Oca 2018, 21:39:09
-- Sunucu sürümü: 5.7.19
-- PHP Sürümü: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `kahve_db`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kahveler`
--

DROP TABLE IF EXISTS `kahveler`;
CREATE TABLE IF NOT EXISTS `kahveler` (
  `kahve_id` int(11) NOT NULL AUTO_INCREMENT,
  `kahve_adi` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `kahve_aciklamasi` text COLLATE utf8_turkish_ci NOT NULL,
  `kahve_resim` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`kahve_id`)
) ENGINE=MyISAM AUTO_INCREMENT=48 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `kahveler`
--

INSERT INTO `kahveler` (`kahve_id`, `kahve_adi`, `kahve_aciklamasi`, `kahve_resim`) VALUES
(45, 'Affogato ', 'Sütlü bir tatlının (genellikle dondurma) üzerine Espresso dökülerek hazırlanan bir yiyecek.', 'affogato.jpg'),
(30, 'Americano ', 'Espresso’ya sıcak su eklenip yumuşatılmış haline verilen isim.', 'americano.jpg'),
(29, 'Espresso', 'İnce çekilmiş çekirdeklerin içerisinden yüksek basınç yardımıyla yüksek sıcaklıkta ve az miktarda su buharının geçirilmesi ile elde edilir.', 'espresso.jpg'),
(32, 'Cappuccino', 'Espresso üzerine, su buharı ile köpük haline getirilmiş süt eklenerek hazırlanır.', 'cappi.jpg'),
(33, 'Cilveli Kahve ', 'Ülkemizde Manisa yöresine özgü bir Türk kahvesi türüdür. \r\nPişirilip fincana aktarıldıktan sonra köpük üzerine çifte kavrulmuş bademin çekilerek serpilmesi ile hazırlanır.', 'cilveli.jpg'),
(34, 'Con Panna ', ' Espresso’nun üzerine çırpılmış süt kreması eklenerek hazırlanır.', 'conpanna.jpg'),
(37, 'Mocha', 'Latte’ye çikolata eklenerek hazırlanır.', 'mocha.jpg'),
(38, 'Türk Kahvesi ', 'Çok ince çekilmiş kahve çekirdeklerine su ve şeker karıştırılarak bakır cezve içerisinde kaynamaya yakın bir sıcaklığa kadar ısıtılarak hazırlanır.', 'turkkahvesi.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
