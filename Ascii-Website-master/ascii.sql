-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 16, 2017 at 12:40 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ascii`
--

-- --------------------------------------------------------

--
-- Table structure for table `amb_reg`
--

CREATE TABLE IF NOT EXISTS `amb_reg` (
  `rID` int(5) NOT NULL AUTO_INCREMENT,
  `rName` varchar(30) NOT NULL,
  `rEmail` varchar(30) NOT NULL,
  `rPhone` varchar(30) NOT NULL,
  `rGender` varchar(10) NOT NULL,
  `rUni` varchar(50) NOT NULL,
  PRIMARY KEY (`rID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `amb_reg`
--

INSERT INTO `amb_reg` (`rID`, `rName`, `rEmail`, `rPhone`, `rGender`, `rUni`) VALUES
(1, 'Malik', 'salahudin1996@gmail.com', '3122214511', 'Male', '185');

-- --------------------------------------------------------

--
-- Table structure for table `vol`
--

CREATE TABLE IF NOT EXISTS `vol` (
  `vID` int(5) NOT NULL AUTO_INCREMENT,
  `vName` varchar(40) NOT NULL,
  `vReg` varchar(30) NOT NULL,
  `vPhone` varchar(30) NOT NULL,
  `vEmail` varchar(30) NOT NULL,
  `vGender` varchar(10) NOT NULL,
  PRIMARY KEY (`vID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `vol`
--

INSERT INTO `vol` (`vID`, `vName`, `vReg`, `vPhone`, `vEmail`, `vGender`) VALUES
(1, 'Muhammad Salahudin', '2805-FBAS/BSCS/F13', '3122214511', 'salahudin1996@gmail.com', 'Male');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
