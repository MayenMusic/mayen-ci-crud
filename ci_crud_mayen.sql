-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2014 at 01:16 PM
-- Server version: 5.5.32
-- PHP Version: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ci_crud_mayen`
--
CREATE DATABASE IF NOT EXISTS `ci_crud_mayen` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `ci_crud_mayen`;

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE IF NOT EXISTS `data` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `title` varchar(40) NOT NULL,
  `description` varchar(70) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=50 ;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`id`, `title`, `description`) VALUES
(41, 'Capital in the Twenty-First Century', 'Business & Money'),
(42, 'Think Like a Freak', 'Economy'),
(43, 'The Wealth of Nations (Bantam Classics)', 'Theory'),
(44, 'MACARTHUR ', 'History'),
(45, 'Alien Heart', 'Literature'),
(47, 'Diary ng Panget', 'Love Story'),
(48, 'Screaming Monkeys', 'Economy');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
