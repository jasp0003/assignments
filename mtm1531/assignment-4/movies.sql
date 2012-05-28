-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 28, 2012 at 07:23 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `jasp0003`
--

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE IF NOT EXISTS `movies` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `movie_title` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `release_date` date NOT NULL,
  `director` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `actor` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `actress` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=8 ;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`id`, `movie_title`, `release_date`, `director`, `actor`, `actress`) VALUES
(1, 'hum aapke hain kaun', '2001-01-11', 'ron', 'sunny deol', 'amisha patel'),
(2, 'vivaah', '2005-03-25', 'faraah khan', 'shahid kapoor', 'amrita arora'),
(3, 'love triangle', '2001-02-18', 'farida jalal', 'rohit khanna', 'ayesha takiya'),
(4, 'humsafar', '2007-05-11', 'sayera khan', 'bobby deol', 'priyanka chopra'),
(5, 'premgranth', '2000-08-15', 'kiran kher', 'rishi kapoor', 'babita kapoor'),
(6, 'billu barber', '0000-00-00', 'neeta roy', 'dhruv arora', 'riya sen'),
(7, 'billu barber', '2008-05-11', 'neeta roy', 'dhruv arora', 'riya sen');
