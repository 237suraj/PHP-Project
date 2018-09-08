-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 21, 2011 at 01:59 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ration`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminpurchase`
--

CREATE TABLE IF NOT EXISTS `adminpurchase` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Date` date NOT NULL,
  `Item_id` int(11) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `Rate` int(11) NOT NULL,
  `Amount` int(11) NOT NULL,
  `Status` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT AUTO_INCREMENT=1 ;

--
-- Dumping data for table `adminpurchase`
--


-- --------------------------------------------------------

--
-- Table structure for table `adminsale`
--

CREATE TABLE IF NOT EXISTS `adminsale` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Date` date NOT NULL,
  `Item_id` int(11) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `Rate` int(11) NOT NULL,
  `Amount` int(11) NOT NULL,
  `Reg_no` varchar(30) NOT NULL,
  `Order_no` int(11) NOT NULL,
  `Status` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT AUTO_INCREMENT=1 ;

--
-- Dumping data for table `adminsale`
--


-- --------------------------------------------------------

--
-- Table structure for table `card`
--

CREATE TABLE IF NOT EXISTS `card` (
  `Village_id` int(11) NOT NULL,
  `Card_no` varchar(15) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Adhar_no` int(11) NOT NULL,
  `Adult` int(11) NOT NULL,
  `Child` int(11) NOT NULL,
  `Total_unit` int(11) NOT NULL,
  `Ctype_id` varchar(10) NOT NULL,
  `Gas_con` int(11) NOT NULL,
  `Status` int(11) NOT NULL DEFAULT '1',
  `Flag` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`Card_no`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `card`
--


-- --------------------------------------------------------

--
-- Table structure for table `cardtype`
--

CREATE TABLE IF NOT EXISTS `cardtype` (
  `Ctype_id` int(11) NOT NULL AUTO_INCREMENT,
  `Card_type` varchar(10) NOT NULL,
  `Status` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`Ctype_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `cardtype`
--


-- --------------------------------------------------------

--
-- Table structure for table `circle`
--

CREATE TABLE IF NOT EXISTS `circle` (
  `Circle_id` int(11) NOT NULL AUTO_INCREMENT,
  `Circle_name` varchar(15) NOT NULL,
  `Taluka_id` int(11) NOT NULL DEFAULT '1',
  `Status` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`Circle_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `circle`
--

INSERT INTO `circle` (`Circle_id`, `Circle_name`, `Taluka_id`, `Status`) VALUES
(1, 'Kagal', 1, 1),
(2, 'Sidhhdhanerli', 1, 1),
(3, 'Kenavade', 1, 1),
(4, 'Bidri', 1, 1),
(5, 'Murgud', 1, 1),
(6, 'Kapashi', 1, 1),
(7, 'Khadakevada', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `distpurchase`
--

CREATE TABLE IF NOT EXISTS `distpurchase` (
  `Order_no` int(11) NOT NULL AUTO_INCREMENT,
  `Reg_no` varchar(30) NOT NULL,
  `Order_date` date NOT NULL,
  `Item_id` int(11) NOT NULL,
  `Monthaly_req` int(11) NOT NULL DEFAULT '0',
  `Past_remain` int(11) NOT NULL DEFAULT '0',
  `Past_receive` int(11) NOT NULL DEFAULT '0',
  `Distribute` int(11) NOT NULL DEFAULT '0',
  `Total_remain` int(11) NOT NULL DEFAULT '0',
  `Quantity` int(11) NOT NULL,
  `Status` int(11) NOT NULL DEFAULT '1',
  `Remark` varchar(100) NOT NULL DEFAULT '0' COMMENT 'success=1,pending=0',
  PRIMARY KEY (`Order_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT AUTO_INCREMENT=1 ;

--
-- Dumping data for table `distpurchase`
--


-- --------------------------------------------------------

--
-- Table structure for table `distsale`
--

CREATE TABLE IF NOT EXISTS `distsale` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Date` date NOT NULL,
  `Item_id` int(11) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `Rate` int(11) NOT NULL,
  `Amount` int(11) NOT NULL,
  `Card_no` int(11) NOT NULL,
  `Dist_id` int(11) NOT NULL,
  `Difference` int(11) NOT NULL,
  `Status` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `distsale`
--


-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE IF NOT EXISTS `item` (
  `Item_id` int(11) NOT NULL AUTO_INCREMENT,
  `Item_name` varchar(15) NOT NULL,
  `Status` int(11) NOT NULL DEFAULT '1',
  `Flag` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`Item_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`Item_id`, `Item_name`, `Status`, `Flag`) VALUES
(1, 'Rice', 1, 1),
(2, 'Wheat', 1, 1),
(3, 'Kerosene', 1, 1),
(4, 'Sugar', 1, 1),
(5, 'Dal', 1, 1),
(6, 'Palm oil', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `Reg_no` int(11) NOT NULL DEFAULT '0',
  `Username` varchar(25) NOT NULL,
  `Password` varchar(15) NOT NULL,
  `Shop_name` varchar(25) DEFAULT NULL,
  `Village_id` int(11) DEFAULT NULL,
  `Name` varchar(25) DEFAULT NULL,
  `Email` varchar(20) DEFAULT NULL,
  `Mobile` varchar(11) NOT NULL,
  `User_type` int(11) NOT NULL DEFAULT '0' COMMENT '1 admin, 0 user',
  `Status` int(11) NOT NULL DEFAULT '1' COMMENT '1 active    0 deleted',
  PRIMARY KEY (`Reg_no`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`Reg_no`, `Username`, `Password`, `Shop_name`, `Village_id`, `Name`, `Email`, `Mobile`, `User_type`, `Status`) VALUES
(1, 'admin', 'admin', NULL, NULL, NULL, NULL, '7768975689', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `rate`
--

CREATE TABLE IF NOT EXISTS `rate` (
  `Rate_id` int(11) NOT NULL AUTO_INCREMENT,
  `Ctype_id` int(11) NOT NULL,
  `Item_id` int(11) NOT NULL,
  `Rate` int(11) NOT NULL,
  `Status` int(11) NOT NULL DEFAULT '1',
  `Flag` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`Rate_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `rate`
--


-- --------------------------------------------------------

--
-- Table structure for table `scheme`
--

CREATE TABLE IF NOT EXISTS `scheme` (
  `Scheme_id` int(11) NOT NULL AUTO_INCREMENT,
  `Scheme_name` varchar(50) NOT NULL,
  `Validity_date` date NOT NULL,
  `Description_path` varchar(50) NOT NULL,
  `Status` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`Scheme_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `scheme`
--


-- --------------------------------------------------------

--
-- Table structure for table `taluka`
--

CREATE TABLE IF NOT EXISTS `taluka` (
  `Taluka_id` int(11) NOT NULL AUTO_INCREMENT,
  `Taluka_name` varchar(20) NOT NULL,
  `Status` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`Taluka_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `taluka`
--


-- --------------------------------------------------------

--
-- Table structure for table `village`
--

CREATE TABLE IF NOT EXISTS `village` (
  `Village_id` int(11) NOT NULL AUTO_INCREMENT,
  `Village_name` varchar(15) NOT NULL,
  `Circle_id` int(11) NOT NULL,
  `Status` int(11) NOT NULL DEFAULT '1',
  `Flag` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`Village_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=70 ;

--
-- Dumping data for table `village`
--

INSERT INTO `village` (`Village_id`, `Village_name`, `Circle_id`, `Status`, `Flag`) VALUES
(1, 'Kagal', 1, 1, 1),
(2, 'Sulakud', 1, 1, 1),
(3, 'K Sangaon', 1, 1, 1),
(4, 'M Sangaon', 1, 1, 1),
(5, 'Randivevadi', 1, 1, 1),
(6, 'Pinpalgaon K', 1, 1, 1),
(7, 'Linganur D', 1, 1, 1),
(8, 'Karanur', 1, 1, 1),
(9, 'Sidhhdhanerli', 2, 1, 1),
(10, 'Vhannur', 2, 1, 1),
(11, 'Bachani', 2, 1, 1),
(12, 'Bamani', 2, 1, 1),
(13, 'Shendur', 2, 1, 1),
(14, 'Vhanali', 2, 1, 1),
(15, 'Vandur', 2, 1, 1),
(16, 'Shankarvadi', 2, 1, 1),
(17, 'Ekondi', 2, 1, 1),
(18, 'Kenavade', 3, 1, 1),
(19, 'Savarde K', 3, 1, 1),
(20, 'Goranbe', 3, 1, 1),
(21, 'Pinpalgaon B', 3, 1, 1),
(22, 'Banage', 3, 1, 1),
(23, 'Aanur', 3, 1, 1),
(24, 'Mhakave', 3, 1, 1),
(25, 'Birdi', 4, 1, 1),
(26, 'Boravade', 4, 1, 1),
(27, 'Farakatevadi', 4, 1, 1),
(28, 'Undarvadi', 4, 1, 1),
(29, 'Kurani', 4, 1, 1),
(30, 'Bhadagao', 4, 1, 1),
(31, 'Malage B', 4, 1, 1),
(32, 'Malage K', 4, 1, 1),
(33, 'Chaundal', 4, 1, 1),
(34, 'Valave k', 4, 1, 1),
(35, 'Savarde B', 4, 1, 1),
(36, 'Sonali', 4, 1, 1),
(37, 'Nidhori', 4, 1, 1),
(38, 'Murgud', 5, 1, 1),
(39, 'Surukali', 5, 1, 1),
(40, 'Kurukali', 5, 1, 1),
(41, 'Emage', 5, 1, 1),
(42, 'Metake', 5, 1, 1),
(43, 'Hamidvada', 5, 1, 1),
(44, 'Chimgao', 5, 1, 1),
(45, 'Avachitvadi', 5, 1, 1),
(46, 'Daulatvadi', 5, 1, 1),
(47, 'Kapashi', 6, 1, 1),
(48, 'Bolavi', 6, 1, 1),
(49, 'Manganur', 6, 1, 1),
(50, 'Belevadi K', 6, 1, 1),
(51, 'Tamanakvada', 6, 1, 1),
(52, 'Vadagao', 6, 1, 1),
(53, 'Hasur K', 6, 1, 1),
(54, 'Hasur B', 6, 1, 1),
(55, 'Madyal', 6, 1, 1),
(56, 'Linganur K', 7, 1, 1),
(57, 'Arjuni', 7, 1, 1),
(58, 'Khebavade', 7, 1, 1),
(59, 'Galagale', 7, 1, 1),
(60, 'Nandyal', 7, 1, 1),
(61, 'Allabad', 7, 1, 1),
(62, 'Mungali', 7, 1, 1),
(63, 'Jainyal', 7, 1, 1),
(64, 'Karaddyal', 7, 1, 1),
(65, 'Belevadi Masa', 7, 1, 1),
(66, 'Karanjivane', 7, 1, 1),
(67, 'Haladavade', 7, 1, 1),
(68, 'Haladi', 7, 1, 1),
(69, 'Benigre', 7, 1, 1);
