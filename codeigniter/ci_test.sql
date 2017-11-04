-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 29, 2013 at 12:53 PM
-- Server version: 5.5.24-log
-- PHP Version: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ci_test`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(255) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `address`, `mobile`) VALUES
(1, 'Masud khan', 'm@sud.com', 'ldsjfla lsdj lsdj flk', '9879879'),
(2, 'Sohel Alam', 'al@m.com', 'Dhaka,Bangladesh,BD', '09080'),
(8, 'Salim', 'salim.hossain@ebizzsol.com', 'test', '01717552181'),
(9, 'Syed Salim', 'salimhossain@gmail.com', 'Gulshan, Dhaka', '01717552181'),
(10, 'Salim Hossain', 'salimhossain@gmail.com', 'Gazipur-1700, Dhaka, Bangladesh.', '01717552181'),
(13, 'Galib', 'g@lib.com', 'Dhaka,Bangladesh', '987979'),
(16, 'adasd', 'sadas', 'asd sdasdasd', 'asdasd');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
