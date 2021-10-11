-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 11, 2021 at 01:28 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `login_register`
--

-- --------------------------------------------------------

--
-- Table structure for table `dashboard`
--

CREATE TABLE IF NOT EXISTS `dashboard` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Title` varchar(50) NOT NULL,
  `Description` text NOT NULL,
  `file` text NOT NULL,
  `blog_url()` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `dashboard`
--

INSERT INTO `dashboard` (`id`, `Title`, `Description`, `file`, `blog_url()`) VALUES
(1, 'Centroxy', 'Centroxy Blog Site', 'IMG_20210327_112212.jpg', 'centroxy.com'),
(2, 'hi', 'This is my Blogging website', '', 'try.com'),
(4, 'Centroxy', 'Centroxy Blog Site', '2018-05-05_153827.png', 'www.centroxy.com'),
(5, 'Hello', 'Woooooooooowwwwwwwwwww', '2018-03-24_139197.png', 'example.com');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `file` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `file`) VALUES
(9, 'uma', 'uma@gmail.com', '6cf82ee1020caef069e753c67a97a70d', NULL),
(10, 'Test', 'test@gmail.com', 'a688a47ac73fb58ce3828bcb184cb157', '2018-04-24_149446.png'),
(11, 'Test', 'test1@gmail.com', 'eed2d9226ad1fadceb4f10cdeb20992f', '2018-10-21_234284.png'),
(12, 'Prabhat', 'prabhat@gmail.com', '06c56a89949d617def52f371c357b6db', '2018-03-13_135307.png'),
(13, 'Demo1', 'demo@gmail.com', '2537e2c645f8343c85ed33b2d53dd03e', '2018-03-14_135354.png'),
(14, 'testing', 'testing@gmail.com', '8db530de196531de90a6b2320e55af20', '2018-03-22_138315.png');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
