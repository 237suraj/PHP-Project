-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 20, 2011 at 10:55 PM
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
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `circle`
--


-- --------------------------------------------------------

--
-- Table structure for table `demo`
--

CREATE TABLE IF NOT EXISTS `demo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `mobile` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `demo`
--


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
  PRIMARY KEY (`Item_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `item`
--


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
  PRIMARY KEY (`Village_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `village`
--

