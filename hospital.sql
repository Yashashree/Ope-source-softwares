-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 26, 2015 at 06:36 AM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

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
-- Table structure for table `check`
--

CREATE TABLE IF NOT EXISTS `check` (
  `d1` varchar(20) NOT NULL,
  `d2` varchar(20) NOT NULL,
  `d3` varchar(20) NOT NULL,
  `d4` varchar(20) NOT NULL,
  `d5` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `check`
--

INSERT INTO `check` (`d1`, `d2`, `d3`, `d4`, `d5`) VALUES
('v2', 'v3', 'v43', 'v4', 'v5'),
('hsdshu', '', '', '', ''),
('mother', '', '', '', '');

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
('hgd', 1, 'Male', '654', 'hg', 'kkhb', 'hrush', 'it', 'g@g.com', 641),
('vittha;', 12, 'Male', '5120', 'bh', 'jb', 'bh', 'bhb', 'hb@gmail.com', 895623),
('Sanjay', 45, 'Male', '', 'hfjajfk', 'md', 'sanju', 'sanju', 'sanju@gmail.com', 2147483647),
('yash', 12, 'Female', '1245', 'nhbj', 'njk', 'BHJJJ', 'HJV', 'VDSV@gmai.com', 96532),
('yash', 12, 'Female', '1245', 'nhbj', 'njk', 'BHJJJ', 'HJV', 'VDSV@gmai.com', 96532),
('yash', 12, 'Female', '1245', 'nhbj', 'njk', 'BHJJJ', 'HJV', 'VDSV@gmai.com', 96532),
('yash', 12, 'Female', '1245', 'nhbj', 'njk', 'BHJJJ', 'HJV', 'VDSV@gmai.com', 96532),
('yash', 12, 'Female', '1245', 'nhbj', 'njk', 'BHJJJ', 'HJV', 'VDSV@gmai.com', 96532),
('yash', 12, 'Female', '1245', 'nhbj', 'njk', 'BHJJJ', 'HJV', 'VDSV@gmai.com', 96532),
('yash', 20, 'Female', '4512', 'ghbvn', 'hbn', 'hjn', 'hjn', 'hb@gmail.com', 46521);

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
('h', 'Doctor', 'htt', 21, 'hgc', 31, 362, 'jhc', 'khgc', 'khgc', 'hkc', 'hgc', 'yyc'),
('h', 'Doctor', 'htt', 21, 'hgc', 31, 362, 'jhc', 'khgc', 'khgc', 'hkc', 'hgc', 'yyc'),
('h', 'Doctor', 'htt', 21, 'hgc', 31, 362, 'jhc', 'khgc', 'khgc', 'hkc', 'hgc', 'yyc'),
('h', 'Doctor', 'htt', 21, 'hgc', 31, 362, 'jhc', 'khgc', 'khgc', 'hkc', 'hgc', 'yyc'),
('vittha;', 'Doctor', 'dsajj', 12, 'njhbj', 5421, 45, 'jnkjk', 'kjb', 'bjk', 'bjkb', 'bkj', 'knbk');

-- --------------------------------------------------------

--
-- Table structure for table `indoor`
--

CREATE TABLE IF NOT EXISTS `indoor` (
  `bno` int(11) NOT NULL,
  `no` int(11) NOT NULL DEFAULT '0',
  `name` varchar(50) NOT NULL,
  `age` int(11) NOT NULL,
  `address` varchar(100) NOT NULL,
  `admitdate` varchar(40) NOT NULL,
  `dischargedate` varchar(40) NOT NULL,
  `diagnosis` varchar(500) NOT NULL,
  `treatement` varchar(500) NOT NULL,
  `surgeon` varchar(100) NOT NULL,
  `anasthesiasurgeon` varchar(100) NOT NULL,
  `delivery` varchar(200) NOT NULL,
  `anasthesia` varchar(200) NOT NULL,
  `bdob` varchar(40) NOT NULL,
  `btime` varchar(40) NOT NULL,
  `weight` float NOT NULL,
  `male` tinyint(1) NOT NULL,
  `female` tinyint(1) NOT NULL,
  `twins` tinyint(1) NOT NULL,
  `twininfo` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `asphxia` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `indoor`
--

INSERT INTO `indoor` (`bno`, `no`, `name`, `age`, `address`, `admitdate`, `dischargedate`, `diagnosis`, `treatement`, `surgeon`, `anasthesiasurgeon`, `delivery`, `anasthesia`, `bdob`, `btime`, `weight`, `male`, `female`, `twins`, `twininfo`, `status`, `asphxia`) VALUES
(1, 1, 'vitthal', 21, 'akola\r\n \r\n', '04/10/2015', '04/06/2015', ' sdhjabhj', 'bhbjbhj ', 'Dr. S. B. Nitave', 'nitave', '', '', '04/08/2015', '12.5', 10, 0, 0, 0, 'nil', 'bjhb', 'bhj'),
(2, 3, 'ram', 12, 'sangli\r\n \r\n', '04/07/2015', '04/07/2015', ' hbhbjbj', 'jhjhbj ', 'Dr. S. B. Nitave', 'nitave', 'hjbh', 'bhb', '04/02/2015', '21.05 ', 12, 0, 0, 0, 'nil', 'dsahj', 'dsjk');

-- --------------------------------------------------------

--
-- Table structure for table `indoorcont`
--

CREATE TABLE IF NOT EXISTS `indoorcont` (
  `no` int(11) NOT NULL DEFAULT '0',
  `name` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL,
  `time` varchar(50) NOT NULL,
  `dnote` varchar(400) NOT NULL,
  `time2` varchar(50) NOT NULL,
  `tpr` varchar(50) NOT NULL,
  `comment` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `indoorcont`
--

INSERT INTO `indoorcont` (`no`, `name`, `date`, `time`, `dnote`, `time2`, `tpr`, `comment`) VALUES
(1, 'vgj', '04/30/2015', '12', 'nhbj \r\n', '2', 'gyh', 'njb'),
(3, 'vitthal', '04/01/2015', '12.30', 'jbjbhbhjbj \r\n', '12.30', ' mnn n', 'n n m');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `username` varchar(20) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`) VALUES
('Admin', '0d149b90e7394297301c90191ae775f0');

-- --------------------------------------------------------

--
-- Table structure for table `opd`
--

CREATE TABLE IF NOT EXISTS `opd` (
`no` int(11) NOT NULL,
  `date` varchar(40) NOT NULL,
  `name` varchar(50) NOT NULL,
  `age` int(11) NOT NULL,
  `address` varchar(500) NOT NULL,
  `complents` varchar(500) NOT NULL,
  `pmc` varchar(200) NOT NULL,
  `prmc` varchar(30) NOT NULL,
  `lmp` varchar(100) NOT NULL,
  `oh` varchar(100) NOT NULL,
  `pastho` varchar(500) NOT NULL,
  `dmother` tinyint(1) NOT NULL,
  `dfather` tinyint(1) NOT NULL,
  `dsiblings` tinyint(1) NOT NULL,
  `dgrandparent` tinyint(1) NOT NULL,
  `dnil` tinyint(1) NOT NULL,
  `hmother` tinyint(1) NOT NULL,
  `hfather` tinyint(1) NOT NULL,
  `hsiblings` tinyint(1) NOT NULL,
  `hgrandparent` tinyint(1) NOT NULL,
  `hnil` tinyint(1) NOT NULL,
  `marriage` tinyint(1) NOT NULL,
  `firstd` tinyint(1) NOT NULL,
  `secondd` tinyint(1) NOT NULL,
  `thirdd` tinyint(1) NOT NULL,
  `pet` varchar(30) NOT NULL,
  `personal_ho` varchar(500) NOT NULL,
  `clinical` varchar(500) NOT NULL,
  `hb` float NOT NULL,
  `cbc` varchar(100) NOT NULL,
  `bldgroup` varchar(100) NOT NULL,
  `hbsag` varchar(100) NOT NULL,
  `hiv` varchar(100) NOT NULL,
  `first` tinyint(1) NOT NULL,
  `second` tinyint(1) NOT NULL,
  `lmp2` varchar(100) NOT NULL,
  `edd` varchar(40) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `opd`
--

INSERT INTO `opd` (`no`, `date`, `name`, `age`, `address`, `complents`, `pmc`, `prmc`, `lmp`, `oh`, `pastho`, `dmother`, `dfather`, `dsiblings`, `dgrandparent`, `dnil`, `hmother`, `hfather`, `hsiblings`, `hgrandparent`, `hnil`, `marriage`, `firstd`, `secondd`, `thirdd`, `pet`, `personal_ho`, `clinical`, `hb`, `cbc`, `bldgroup`, `hbsag`, `hiv`, `first`, `second`, `lmp2`, `edd`) VALUES
(1, ' 22/04/2015', 'vitthal', 21, 'akola', 'non', 'nknk            ', 'Regular', '04/20/2015', 'njh', 'nbhjj', 1, 0, 1, 1, 0, 1, 1, 1, 1, 0, 1, 1, 1, 1, 'Hens', ' bhbhjb', 'bhj', 12, 'hbhh', 'O+ve', 'hj', 'bhj', 0, 1, '04/20/2015', 'bhj'),
(2, ' 22/04/2015', 'yash', 20, ' knjk', 'nkjn', 'jkn            ', 'Regular', '04/02/2015', 'jhjbhj', 'jhbhjbjh', 1, 1, 0, 0, 0, 1, 1, 1, 0, 0, 1, 0, 0, 0, 'Cat', 'nkjn', 'njknkn', 10, 'nj', 'O+ve', 'bhjb', 'jj', 1, 1, '04/02/2015', 'nkj'),
(3, ' 22/04/2015', 'ram', 12, 'sangli', 'ncsdjhj', 'nknjknjknk            ', 'Regular', '04/16/2015', '2112', 'hjbbhhj', 1, 1, 0, 0, 0, 1, 0, 1, 0, 0, 1, 0, 0, 0, 'Hens', 'vnsdjfk', 'jknjknk', 12.4, 'njnjknjk', 'O-ve', 'dfs', 'njhh', 1, 0, '04/16/2015', ' jhbjh'),
(4, ' 22/04/2015', 'viihds', 12, 'hchjs', 'gghjgj', '           hbbhjbj', 'Regular', '04/04/2015', 'kjjbb', 'jkjkbjkbbj', 1, 1, 0, 1, 0, 1, 1, 0, 0, 0, 1, 1, 1, 0, 'Dog', 'bhjbfdsjhfhb', 'jvncvbkcj', 12.5, 'hjjjb', 'A+ve', 'hjbbhj', 'bhj', 1, 1, '04/04/2015', 'jbjj'),
(5, ' 25/04/2015', 'njbjk', 12, 'nkjkbbnjk', 'bjkbjk', 'bjbkbb            ', 'bjk', '04/13/2015', 'jigvgjvjv', 'bhjjbj', 1, 1, 1, 1, 0, 1, 1, 1, 1, 0, 1, 1, 1, 1, 'Cat', 'nbnb', 'jkjbjkbj', 12, 'bhjb', 'O+ve', 'hjj', 'bhj', 1, 1, '04/13/2015', 'tgvhb n'),
(6, ' 25/04/2015', 'kjnknbkj', 12, 'kjbjkbk', 'bjkbk', 'bjkb            ', 'b', '04/17/2015', 'njknbj', 'bjk', 1, 1, 1, 0, 0, 1, 1, 0, 0, 0, 1, 1, 0, 0, 'Dog', 'hbjhbvj', 'bjhbjb', 2, 'kjbgg', 'A+ve', 'jghvhgf', 'vvjggjg', 0, 1, '04/17/2015', 'bkb'),
(7, ' 25/04/2015', 'vdsv', 12, 'nkjn', 'nkjnk', 'nkj            ', 'Regular', '04/14/2015', 'nkjn', 'nkjnk', 1, 1, 0, 0, 0, 1, 0, 1, 0, 0, 1, 1, 1, 0, 'Cat', 'jhhbhjb', 'bhjbhjb', 0, 'bjhbjb', 'O+ve', 'bjh', 'njknkjn', 0, 1, '04/14/2015', 'nkjbkj'),
(8, ' 25/04/2015', 'vdsv', 12, 'nkjn', 'nkjnk', 'nkj            ', 'Regular', '04/14/2015', 'nkjn', 'nkjnk', 1, 1, 0, 0, 0, 1, 0, 1, 0, 0, 1, 1, 1, 0, 'Cat', 'jhhbhjb', 'bhjbhjb', 0, 'bjhbjb', 'O+ve', 'bjh', 'njknkjn', 0, 1, '04/14/2015', 'nkjbkj'),
(9, ' 26/04/2015', 'akshay', 21, 'sahdbshbj', 'kjfdbfsbk', 'ndjskbvjs            ', 'Regular', '04/16/2015', 'dsd', 'cdskj', 1, 1, 1, 0, 0, 1, 0, 1, 1, 0, 1, 1, 1, 0, 'Dog', 'dkfgsn', 'jjjvcjvjv', 12, 'bjh', 'O-ve', 'khbjbhj', 'no', 1, 1, '04/16/2015', 'jhbb'),
(10, ' 26/04/2015', 'akshay', 21, 'sahdbshbj', 'kjfdbfsbk', 'ndjskbvjs            ', 'Regular', '04/16/2015', 'dsd', 'cdskj', 1, 1, 1, 0, 0, 1, 0, 1, 1, 0, 1, 1, 1, 0, 'Dog', 'dkfgsn', 'jjjvcjvjv', 12, 'bjh', 'O-ve', 'khbjbhj', 'no', 1, 1, '04/16/2015', 'jhbb'),
(11, ' 26/04/2015', 'akshay', 21, 'sahdbshbj', 'kjfdbfsbk', 'ndjskbvjs            ', 'Regular', '04/16/2015', 'dsd', 'cdskj', 1, 1, 1, 0, 0, 1, 0, 1, 1, 0, 1, 1, 1, 0, 'Dog', 'dkfgsn', 'jjjvcjvjv', 12, 'bjh', 'O-ve', 'khbjbhj', 'no', 1, 1, '04/16/2015', 'jhbb');

-- --------------------------------------------------------

--
-- Table structure for table `receptionistreg`
--

CREATE TABLE IF NOT EXISTS `receptionistreg` (
  `name` varchar(100) NOT NULL,
  `rid` int(11) NOT NULL,
  `age` int(11) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `ddob` varchar(100) NOT NULL,
  `address` varchar(500) NOT NULL,
  `bgroup` varchar(100) NOT NULL,
  `occupation` varchar(100) NOT NULL,
  `uname` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `receptionistreg`
--

INSERT INTO `receptionistreg` (`name`, `rid`, `age`, `gender`, `ddob`, `address`, `bgroup`, `occupation`, `uname`, `pass`, `email`, `phone`) VALUES
('yash', 2, 12, 'Male', '12', 'jhb', 'B+ve', 'bhjb', 'bhj', 'bh', 'hj@gmail.com', 84512),
('yash', 2, 12, 'Male', '12', 'jhb', 'B+ve', 'bhjb', 'bhj', 'bh', 'hj@gmail.com', 84512),
('vitthal', 2, 12, 'Male', '5412', 'njkb', 'B+ve', 'jkn', 'ok', 'bjk', 'bjk@gmail.com', 8754),
('gvvgh', 1, 5, 'Male', 'jknb', '', 'O+ve', 'ghv', 'vv', 'vgv', 'gvgv@gmail.com', 554);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `indoor`
--
ALTER TABLE `indoor`
 ADD PRIMARY KEY (`no`);

--
-- Indexes for table `indoorcont`
--
ALTER TABLE `indoorcont`
 ADD PRIMARY KEY (`no`);

--
-- Indexes for table `opd`
--
ALTER TABLE `opd`
 ADD PRIMARY KEY (`no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `opd`
--
ALTER TABLE `opd`
MODIFY `no` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
