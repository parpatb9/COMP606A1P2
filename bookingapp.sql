-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 10, 2019 at 04:50 AM
-- Server version: 5.7.24
-- PHP Version: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookingapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

DROP TABLE IF EXISTS `appointments`;
CREATE TABLE IF NOT EXISTS `appointments` (
  `apid` int(11) NOT NULL AUTO_INCREMENT,
  `msgtype` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL,
  `timeslot` varchar(50) NOT NULL,
  `comment` varchar(1000) NOT NULL,
  `uid` int(11) NOT NULL,
  PRIMARY KEY (`apid`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`apid`, `msgtype`, `date`, `timeslot`, `comment`, `uid`) VALUES
(1, '1', '2019-04-10', '1', 'ds', 1);

-- --------------------------------------------------------

--
-- Table structure for table `msgtype`
--

DROP TABLE IF EXISTS `msgtype`;
CREATE TABLE IF NOT EXISTS `msgtype` (
  `mid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`mid`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `msgtype`
--

INSERT INTO `msgtype` (`mid`, `name`) VALUES
(1, 'Sports'),
(2, 'Deep Tissue'),
(3, 'Therapeutic'),
(4, 'Relaxation');

-- --------------------------------------------------------

--
-- Table structure for table `timeslot`
--

DROP TABLE IF EXISTS `timeslot`;
CREATE TABLE IF NOT EXISTS `timeslot` (
  `tid` int(11) NOT NULL AUTO_INCREMENT,
  `timeslot` varchar(50) NOT NULL,
  PRIMARY KEY (`tid`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `timeslot`
--

INSERT INTO `timeslot` (`tid`, `timeslot`) VALUES
(1, '10:00 to 11:00'),
(2, '11:00 to 12:00'),
(3, '12:00 to 13:00'),
(4, '13:00 to 14:00'),
(5, '14:00 to 15:00'),
(6, '15:00 to 16:00'),
(7, '16:00 to 17:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uid`, `fname`, `lname`, `email`, `password`) VALUES
(1, 'Purvik', 'Maheta', 'purvik@gmail.com', '0d89fca990a5b639a0078da7f83632ff');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
