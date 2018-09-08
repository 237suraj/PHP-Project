-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 20, 2016 at 06:32 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ration`
--
CREATE DATABASE IF NOT EXISTS `ration` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `ration`;

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT AUTO_INCREMENT=4 ;

--
-- Dumping data for table `adminpurchase`
--

INSERT INTO `adminpurchase` (`Id`, `Date`, `Item_id`, `Quantity`, `Rate`, `Amount`, `Status`) VALUES
(1, '0000-00-00', 1, 256, 2, 512, 1),
(2, '1993-09-02', 3, 237, 2, 474, 1),
(3, '2016-09-16', 2, 500, 5, 10, 1);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT AUTO_INCREMENT=16 ;

--
-- Dumping data for table `adminsale`
--

INSERT INTO `adminsale` (`Id`, `Date`, `Item_id`, `Quantity`, `Rate`, `Amount`, `Reg_no`, `Order_no`, `Status`) VALUES
(1, '2016-09-13', 2, 1, 1, 1, '11', 0, 1),
(2, '2016-09-08', 2, 12, 2, 24, '273', 0, 1),
(3, '2016-09-08', 2, 1, 2, 20, '273', 0, 1),
(4, '2016-10-21', 3, 20, 2, 40, '273', 0, 1),
(5, '2016-10-21', 3, 20, 2, 40, '273', 0, 1),
(6, '2016-09-15', 3, 20, 5, 100, '123', 0, 1),
(8, '2016-12-02', 2, 15, 10, 1500, '123', 2, 1),
(11, '2016-12-14', 2, 50, 10, 1000, '273', 5, 1),
(12, '2016-12-14', 13, 100, 10, 1000, '273', 5, 1),
(13, '2016-12-14', 13, 100, 10, 1000, '273', 5, 1),
(14, '2016-12-14', 13, 100, 10, 1000, '11', 5, 1),
(15, '2016-12-14', 13, 100, 10, 1000, '273', 5, 1);

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

INSERT INTO `card` (`Village_id`, `Card_no`, `Name`, `Adhar_no`, `Adult`, `Child`, `Total_unit`, `Ctype_id`, `Gas_con`, `Status`) VALUES
(13, '1', 'SHINDE SURAJ BALWANT', 1, 2, 7, 11, '1', 1, 1),
(13, '2', 'santosh khade', 12345, 2, 3, 7, '2', 1, 1),
(14, '3', 'suraj shinde', 1234567, 2, 4, 8, '2', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `cardtype`
--

CREATE TABLE IF NOT EXISTS `cardtype` (
  `Ctype_id` int(11) NOT NULL AUTO_INCREMENT,
  `Card_type` varchar(10) NOT NULL,
  `Status` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`Ctype_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `cardtype`
--

INSERT INTO `cardtype` (`Ctype_id`, `Card_type`, `Status`) VALUES
(1, 'APL', 1),
(2, 'BPL-big', 1),
(3, 'BPL-small', 1),
(4, 'BPL', 1);

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `circle`
--

INSERT INTO `circle` (`Circle_id`, `Circle_name`, `Taluka_id`, `Status`) VALUES
(20, '2', 1, 1),
(22, 'sangaon', 1, 1),
(21, 'sss', 1, 0),
(3, 'vandur', 1, 0),
(2, 'sidhanerli', 1, 1),
(1, 'kagal', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `demo`
--

CREATE TABLE IF NOT EXISTS `demo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `mobile` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `demo`
--

INSERT INTO `demo` (`id`, `name`, `mobile`) VALUES
(1, 'a', 11),
(2, 'a', 1),
(3, 'abc', 123);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT AUTO_INCREMENT=8 ;

--
-- Dumping data for table `distpurchase`
--

INSERT INTO `distpurchase` (`Order_no`, `Reg_no`, `Order_date`, `Item_id`, `Monthaly_req`, `Past_remain`, `Past_receive`, `Distribute`, `Total_remain`, `Quantity`, `Status`, `Remark`) VALUES
(1, '273', '2016-09-23', 13, 0, 0, 0, 0, 0, 100, 1, '1'),
(2, '273', '2016-09-24', 14, 0, 0, 0, 0, 0, 150, 1, '0\r\n'),
(3, '123', '2016-09-17', 14, 0, 0, 0, 0, 0, 200, 1, '1'),
(4, '11', '2016-09-17', 13, 0, 0, 0, 0, 0, 150, 1, '1'),
(5, '273', '2016-09-05', 13, 0, 0, 0, 0, 0, 100, 1, '1'),
(6, '273', '2016-09-07', 17, 0, 0, 0, 0, 0, 100, 1, '1'),
(7, '273', '2016-12-01', 14, 0, 0, 0, 0, 0, 100, 1, '0');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `distsale`
--

INSERT INTO `distsale` (`Id`, `Date`, `Item_id`, `Quantity`, `Rate`, `Amount`, `Card_no`, `Dist_id`, `Difference`, `Status`) VALUES
(4, '2016-01-08', 15, 100, 10, 2, 5, 273, 1, 1),
(5, '2016-01-08', 14, 1, 1, 1, 1, 273, 15, 1),
(6, '2016-09-25', 17, 50, 1, 50, 1, 273, 0, 1),
(7, '2016-09-27', 14, 70, 2, 140, 1, 273, 0, 1),
(8, '2016-09-22', 17, 10, 1, 10, 2, 273, 0, 1),
(9, '2016-09-26', 14, 10, 2, 20, 2, 273, 0, 1),
(10, '2016-12-05', 14, 50, 2, 100, 1, 273, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE IF NOT EXISTS `item` (
  `Item_id` int(11) NOT NULL AUTO_INCREMENT,
  `Item_name` varchar(15) NOT NULL,
  `Status` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`Item_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`Item_id`, `Item_name`, `Status`) VALUES
(20, 'Dal', 1),
(17, 'dal', 0),
(16, 'sfasdf32434234', 0),
(13, 'sugar', 1),
(14, 'rice', 1),
(15, 'wheat', 1),
(12, 'Palm oil', 1);

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
(11, 'admin', 'admin', 'santosh', NULL, NULL, NULL, '', 1, 1),
(12, 'bimat', 'ssss', 'shop', 0, 'ssss', 'suraj@gmail.com', '7768975689', 0, 1),
(2735, 'bimat', 'ssss', 'shop', 4, 'ssss', 'suraj@gmail.com', '2147483647', 0, 1),
(372, 'bimat', 'sssssssss', 'shop', 4, 'ssss', 'suraj@gmail.com', '7768975689', 0, 1),
(456, 'bimat', 'sssssssss', 'shop', 0, 'ssss', 'suraj@gmail.com', '7768975689', 0, 1),
(123, 'sup', 'sss', 'sss', 6, 's', 's@gmail.com', '96658643177', 0, 1),
(273, 'suraj', 'shinde', 'suraj', 16, 'suraj', 'suraj@gmail.com', '7768975689', 0, 1),
(3, 'qwer', 'qwer', 'qwer', 16, 'qwer', 'qwer@qwer', '5674353245', 0, 1);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `rate`
--

INSERT INTO `rate` (`Rate_id`, `Ctype_id`, `Item_id`, `Rate`, `Status`) VALUES
(1, 1, 13, 10, 1),
(2, 2, 14, 0, 0),
(3, 3, 15, 5, 1),
(5, 1, 14, 20, 1),
(6, 3, 15, 7, 1),
(7, 1, 13, 10, 1),
(8, 1, 20, 3, 1),
(9, 0, 0, 1, 1);

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `scheme`
--

INSERT INTO `scheme` (`Scheme_id`, `Scheme_name`, `Validity_date`, `Description_path`, `Status`) VALUES
(1, 'ss', '2016-09-06', '', 1),
(2, 'ss', '2016-09-03', 'doc/main pexus - for merge.doc', 1),
(3, 'ss', '2016-09-03', 'doc/Doc1.docx', 1),
(4, 'sss', '0000-00-00', 'doc/S_20160907083603docx', 1),
(5, 'ss', '2016-09-03', 'doc/S_20160907083652.docx', 1),
(6, 'sup', '2016-09-03', 'doc/S_20160908094608.docx', 1),
(7, 'eeewww', '2016-09-06', 'doc/S_20160908101736.docx', 1),
(8, 'eeeeee', '0000-00-00', 'doc/S_20160908101756.docx', 1),
(9, 'new ss', '2016-12-01', 'doc/S_20161201061822.docx', 1),
(10, 'new r', '2016-09-06', 'doc/S_20160908102014.docx', 1),
(11, 'updated schem', '2016-09-03', 'doc/S_20160908102037.docx', 1),
(12, 'ssssssss', '0000-00-00', 'doc/S_20160912042809.docx', 0),
(13, 'sssss', '0000-00-00', 'doc/S_20160913050800.docx', 1),
(14, 'new scheme', '2016-09-14', 'doc/S_20161201061027.docx', 1);

-- --------------------------------------------------------

--
-- Table structure for table `taluka`
--

CREATE TABLE IF NOT EXISTS `taluka` (
  `Taluka_id` int(11) NOT NULL AUTO_INCREMENT,
  `Taluka_name` varchar(20) NOT NULL,
  `Status` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`Taluka_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `taluka`
--

INSERT INTO `taluka` (`Taluka_id`, `Taluka_name`, `Status`) VALUES
(1, 'kagal', 1),
(2, 'karveer', 1),
(3, 'Panahla', 1);

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `village`
--

INSERT INTO `village` (`Village_id`, `Village_name`, `Circle_id`, `Status`) VALUES
(20, 'ss', 0, 1),
(19, 'n', 0, 0),
(18, 'kop', 0, 1),
(13, 'vhannur', 2, 1),
(14, 'kagal', 1, 1),
(15, 'sidhanrli', 2, 1),
(16, 'sidhanerli', 2, 1),
(17, 'vhannur', 1, 1),
(21, 'sdf', 0, 1),
(4, 'kop', 1, 1),
(6, 'kk', 2, 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
