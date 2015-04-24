-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 22, 2015 at 07:56 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hospital`
--

-- --------------------------------------------------------

--
-- Table structure for table `formf`
--

CREATE TABLE IF NOT EXISTS `formf` (
  `i` varchar(200) NOT NULL,
  `select` varchar(100) NOT NULL,
  `of` varchar(200) NOT NULL,
  `age` int(11) NOT NULL,
  `reside` varchar(500) NOT NULL,
  `income` int(11) NOT NULL,
  `child` int(11) NOT NULL,
  `religion` varchar(100) NOT NULL,
  `male` varchar(100) NOT NULL,
  `female` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `me` varchar(100) NOT NULL,
  `per` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `formf`
--

INSERT INTO `formf` (`i`, `select`, `of`, `age`, `reside`, `income`, `child`, `religion`, `male`, `female`, `state`, `me`, `per`) VALUES
('h', 'Doctor', 'htt', 21, 'hgc', 31, 362, 'jhc', 'khgc', 'khgc', 'hkc', 'hgc', 'yyc'),
('h', 'Doctor', 'htt', 21, 'hgc', 31, 362, 'jhc', 'khgc', 'khgc', 'hkc', 'hgc', 'yyc'),
('h', 'Doctor', 'htt', 21, 'hgc', 31, 362, 'jhc', 'khgc', 'khgc', 'hkc', 'hgc', 'yyc');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
