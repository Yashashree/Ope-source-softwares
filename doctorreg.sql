-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 21, 2015 at 07:20 AM
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
-- Table structure for table `doctorreg`
--

CREATE TABLE IF NOT EXISTS `doctorreg` (
  `name` varchar(100) NOT NULL,
  `age` int(11) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `ddob` varchar(20) NOT NULL,
  `address` varchar(250) NOT NULL,
  `occupation` varchar(150) NOT NULL,
  `uname` varchar(200) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `phone` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctorreg`
--

INSERT INTO `doctorreg` (`name`, `age`, `gender`, `ddob`, `address`, `occupation`, `uname`, `pass`, `email`, `phone`) VALUES
('vivj', 12, '', '122', 'mklm', 'nnjn', 'hrush', 'it', 'viit@gmail.com', 87452),
('vivj', 12, '', '122', 'mklm', 'nnjn', 'hrush', 'it', 'viit@gmail.com', 87452),
('hgd', 1, 'Male', '654', 'hg', 'kkhb', 'hrush', 'it', 'g@g.com', 641),
('hgd', 1, 'Male', '654', 'hg', 'kkhb', 'hrush', 'it', 'g@g.com', 641);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
