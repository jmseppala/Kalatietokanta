-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 04.11.2017 klo 19:22
-- Palvelimen versio: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u199402621_kala`
--

-- --------------------------------------------------------

--
-- Rakenne taululle `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nimi` varchar(50) NOT NULL,
  `kala` varchar(100) NOT NULL,
  `paino` varchar(50) NOT NULL,
  `pvm` varchar(15) NOT NULL,
  `paikka` varchar(50) NOT NULL,
  `viehe` varchar(70) NOT NULL,
  `muuta` varchar(750) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=232 DEFAULT CHARSET=latin1;

--
-- Vedos taulusta `users`
--

INSERT INTO `users` (`id`, `nimi`, `kala`, `paino`, `pvm`, `paikka`, `viehe`, `muuta`) VALUES
(1, 'J-M', 'Tenon titti', '', '5.7.2011', 'Teno, Boratbokca, Alakari', '-', 'Ensimmäinen perholohi.  '),
(2, 'J-M', 'Tenon titti', '', '6.7.2012', 'Teno, Boratbokca, Kuikkakivi', '-', ''),
(4, 'J-M', 'Tenon titti', '', '30.6.2013', 'Teno, Boratbokca, Välikari', '-', 'Ensimmäisellä laskulla'),
(8, 'J-M', 'Ahven', '320 g', '15.2.2014', 'Menkijärvi, maston alue', 'Pystypilkki', 'Päivän päätteeksi viikko ennen pilkkikisaa. Tätä ennen järven toisesta päästä pienempää ahventa hyvällä syönnillä. Lopetin reiluun kiloon.'),
(41, 'J-M.S', 'Hauki', '', '9.10.2014', 'Menkijärvi', 'Keltaoranssi ym deceiver.', 'Yli 10 astetta lähtiessä lämmintä ja muutaman tunnin reissu. Tuuli lähestulkoon tyyni. '),
(49, 'J-M', '2 ahventa ja pientä nypyttelyä', 'Ehkä n. 50 gr ahvenet', '8.1.2015', 'Menkijärvi, masto', 'Tapsit', 'Nollakeli, tasainen tuuli ja lumituiskua. '),
(77, 'J-M', '2 ahventa ja irtoamisia', '', '28.2.2015', 'Menkijärvi', 'Morreihin otti', 'Viitisen tuntia taisi mennä eli varmasti kuluvan talven pisin pilkkireissu. Palatessa n. 2 astetta lämmintä. Melko kova tuuli muttei juuri kylmä ollut.'),
(181, 'J-M', '1 ahven ja lahna + tärppejä', 'Ahven 62 gr', '1.4.2016', 'Voitilanjärvi', 'Otti morriin', 'Pilkkikisa'),
(231, 'J-M', '2 haukea', '', '13.5.2017', 'Hirvijärvi', 'Tinseli', 'SJCAM:lla tuli kuvattua noin tunti.');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
