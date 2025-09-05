-- phpMyAdmin SQL Dump
-- version 4.1.10
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 26, 2023 at 04:08 PM
-- Server version: 5.1.62
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `Ecom`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE IF NOT EXISTS `appointment` (
  `aid` int(11) NOT NULL AUTO_INCREMENT,
  `panditname` varchar(200) NOT NULL,
  `event` varchar(200) NOT NULL,
  `date` varchar(200) NOT NULL,
  `time` varchar(200) NOT NULL,
  `aname` varchar(200) NOT NULL,
  `alast` varchar(200) NOT NULL,
  `aaddress` varchar(200) NOT NULL,
  `amobile` int(20) NOT NULL,
  PRIMARY KEY (`aid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`aid`, `panditname`, `event`, `date`, `time`, `aname`, `alast`, `aaddress`, `amobile`) VALUES
(1, 'pandit1', 'birhtday', '2023-02-26', '19:02', 'Yy', 'Ttt', 'Ttt', 666);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `oid` int(11) NOT NULL AUTO_INCREMENT,
  `pid` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `name` varchar(108) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `mobile` int(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `pincode` int(108) NOT NULL,
  `cardnumber` int(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `exdate` varchar(100) NOT NULL,
  `cvnum` int(100) NOT NULL,
  `zcode` int(100) NOT NULL,
  PRIMARY KEY (`oid`),
  KEY `orders_pid_productitem_pid` (`pid`),
  KEY `orders_uid_user_uid` (`uid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`oid`, `pid`, `uid`, `name`, `lastname`, `mobile`, `address`, `pincode`, `cardnumber`, `date`, `exdate`, `cvnum`, `zcode`) VALUES
(1, 1, 1, 'Ttt', 'Ttt', 66, 'Ttt', 66, 666, '2345', '45', 55, 55),
(2, 1, 0, '', 'Xxdd', 66, 'Ttt', 66, 55, '2345', '55', 55, 56),
(3, 1, 1, 'Hsh', 'Dgg', 0, 'Ysydy', 0, 0, '66', '56', 55, 66),
(4, 1, 3, 'Ehdh', 'Eyeg', 6666, 'Ygg', 556, 5556, '555', '55', 555, 55),
(5, 0, 5, 'Tt', 'Tr', 666, 'Dd', 66, 566, '2023-02-22', '2023-02-22', 66, 66);

-- --------------------------------------------------------

--
-- Table structure for table `productitem`
--

CREATE TABLE IF NOT EXISTS `productitem` (
  `pid` int(11) NOT NULL AUTO_INCREMENT,
  `pname` varchar(100) NOT NULL,
  `pprice` int(255) NOT NULL,
  `pimg` varchar(155) NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `productitem`
--

INSERT INTO `productitem` (`pid`, `pname`, `pprice`, `pimg`) VALUES
(1, 'Agarbatti ', 288, 'download.jpeg'),
(2, 'Haldi', 58, 'Haldii Packet.jpg'),
(3, 'Cotton ', 288, 'cotton_wicks.jpg'),
(4, 'Camphor', 108, 'Camphor.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `uname` varchar(100) NOT NULL,
  `upass` int(100) NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uid`, `uname`, `upass`) VALUES
(1, 'Admin', 34455),
(2, 'Admin', 34455),
(3, 'Pusj', 56),
(4, 'Pusj', 56),
(5, 'Dur', 56),
(6, 'Dur', 56),
(7, 'Yy', 566),
(8, 'Yy', 566),
(9, '5', 56),
(10, '5', 56),
(11, 'Jj', 566),
(12, 'Jj', 566),
(13, 'Jj', 566),
(14, 'Jj', 566),
(15, 'Jj', 566),
(16, 'Jj', 566),
(17, 'Jj', 5),
(18, 'Jj', 5),
(19, 'Jj', 5),
(20, 'Jj', 5),
(21, 'Yy', 34455),
(22, 'Yy', 34455),
(23, 'Tttt', 56),
(24, 'Tttt', 56);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
