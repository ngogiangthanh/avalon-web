-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 17, 2014 at 04:13 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `avalon_temp`
--

-- --------------------------------------------------------

--
-- Table structure for table `branches`
--

CREATE TABLE IF NOT EXISTS `branches` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `NAME_BRANCH` varchar(255) COLLATE utf8_bin NOT NULL,
  `DESCRIPTE_BRANCH` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=3 ;

--
-- Dumping data for table `branches`
--

INSERT INTO `branches` (`ID`, `NAME_BRANCH`, `DESCRIPTE_BRANCH`) VALUES
(1, 'chi nhánh 1', 'nguyễn thành nhẫn'),
(2, 'chi nhánh 2', 'thành cổng');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `NAME_CAT` varchar(100) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `CATEGORY_NAME_CAT_UNIQUE` (`NAME_CAT`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `NAME` varchar(256) COLLATE utf8_bin NOT NULL,
  `EMAIL` varchar(200) COLLATE utf8_bin NOT NULL,
  `CONTACT` text COLLATE utf8_bin NOT NULL,
  `RESPONE` text COLLATE utf8_bin,
  `STATUS` tinyint(1) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `details_order`
--

CREATE TABLE IF NOT EXISTS `details_order` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `ID_PRO` int(11) NOT NULL,
  `ID_ORDER` int(11) NOT NULL,
  `AMOUNT` int(11) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `FK_HAVE_PRODUCTS` (`ID_ORDER`),
  KEY `FK_HAVE_BEEN_ORDERED` (`ID_PRO`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `details_promotion`
--

CREATE TABLE IF NOT EXISTS `details_promotion` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `ID_PRO` int(11) NOT NULL,
  `ID_PROMOTION` int(11) NOT NULL,
  `PRICE_OFF` float(8,2) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `FK_HAVE_PROMOTIONS` (`ID_PROMOTION`),
  KEY `FK_HAVE_PRODUCT_PROMO` (`ID_PRO`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `ID_ADMIN` int(11) DEFAULT NULL,
  `ID_CUSTOMER` int(11) NOT NULL,
  `TIME_ORDER` datetime NOT NULL,
  `TIME_PROCESS` datetime DEFAULT NULL,
  `STATUS_ORDER` tinyint(4) NOT NULL,
  `PRICE_SET` char(3) COLLATE utf8_bin NOT NULL,
  `CURRENT_POINTS` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`ID`),
  KEY `FK_PROCESS_ORDERS` (`ID_ADMIN`),
  KEY `FK_HAVE_ORDERS` (`ID_CUSTOMER`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `ID_UNIT` int(11) NOT NULL,
  `ID_CAT` int(11) NOT NULL,
  `INFO_PRO` text COLLATE utf8_bin NOT NULL,
  `NAME_PRO` varchar(256) COLLATE utf8_bin NOT NULL,
  `PRICE_USD` float(8,2) NOT NULL,
  `PRICE_VND` float(10,2) NOT NULL,
  `URL` varchar(1024) COLLATE utf8_bin DEFAULT NULL,
  `THUMB` varchar(1024) COLLATE utf8_bin DEFAULT NULL,
  `URL_PDF` varchar(1024) COLLATE utf8_bin DEFAULT NULL,
  `SLIDE_SHOW` bit(1) NOT NULL DEFAULT b'1',
  PRIMARY KEY (`ID`),
  KEY `FK_HAVE_UNITS` (`ID_UNIT`),
  KEY `FK_HAVE_CATEGORY` (`ID_CAT`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `promotions`
--

CREATE TABLE IF NOT EXISTS `promotions` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `NAME_PROMOTION` varchar(256) COLLATE utf8_bin NOT NULL,
  `CONTENT_PROMOTION` text COLLATE utf8_bin NOT NULL,
  `TIME_START` date NOT NULL,
  `TIME_END` date NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `unit`
--

CREATE TABLE IF NOT EXISTS `unit` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `UNIT_NAME` varchar(100) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `UNIT_NAME_UNIQUE` (`UNIT_NAME`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `USERNAME` varchar(200) COLLATE utf8_bin NOT NULL,
  `PASSWORD` varchar(256) COLLATE utf8_bin NOT NULL,
  `NAME` varchar(256) COLLATE utf8_bin DEFAULT NULL,
  `BIRTH` date DEFAULT NULL,
  `ADDRESS` varchar(256) COLLATE utf8_bin DEFAULT NULL,
  `STREET` varchar(256) COLLATE utf8_bin DEFAULT NULL,
  `DISTRICT` varchar(256) COLLATE utf8_bin DEFAULT NULL,
  `PROVINCE` varchar(256) COLLATE utf8_bin DEFAULT NULL,
  `NUMBERPHONE` varchar(15) COLLATE utf8_bin DEFAULT NULL,
  `EMAIL` varchar(200) COLLATE utf8_bin DEFAULT NULL,
  `ROLE` tinyint(4) NOT NULL,
  `STATUS` tinyint(4) NOT NULL,
  `POINT` int(11) DEFAULT '0',
  PRIMARY KEY (`ID`),
  UNIQUE KEY `USER_USERNAME_UNIQUE` (`USERNAME`) USING BTREE,
  UNIQUE KEY `USER_EMAIL_UNIQUE` (`EMAIL`) USING BTREE
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=4 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID`, `USERNAME`, `PASSWORD`, `NAME`, `BIRTH`, `ADDRESS`, `STREET`, `DISTRICT`, `PROVINCE`, `NUMBERPHONE`, `EMAIL`, `ROLE`, `STATUS`, `POINT`) VALUES
(1, 'admin', '202cb962ac59075b964b07152d234b70', 'Lê thanh tùng', '1992-01-28', 'home', 'home', 'homep', 'Cần Thơ', '01259201059', 'thanhthanh1516@gmail.com', 1, 1, 0),
(2, 'user1', '202cb962ac59075b964b07152d234b70', 'Nguyễn Mai Thảo', '1990-06-17', '138', 'Nguyễn Văn Cừ', 'Ninh Kiều', 'TP Cần Thơ', '0918726003', 'nmt_vn@yahoo.com', 0, 1, 0),
(3, 'user', '202cb962ac59075b964b07152d234b70', 'Ngô Giang Thanh', '1992-08-25', '132/28, Hưng Lợi, Ninh Kiều, Cần Thơ', '3/2', 'Ninh Kiều', 'Cần Thơ', '0946344123', 'thanh101683@student.ctu.edu.vn', 0, 1, 0);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `details_order`
--
ALTER TABLE `details_order`
  ADD CONSTRAINT `FK_HAVE_BEEN_ORDERED` FOREIGN KEY (`ID_PRO`) REFERENCES `product` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_HAVE_PRODUCTS` FOREIGN KEY (`ID_ORDER`) REFERENCES `orders` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `details_promotion`
--
ALTER TABLE `details_promotion`
  ADD CONSTRAINT `FK_HAVE_PRODUCT_PROMO` FOREIGN KEY (`ID_PRO`) REFERENCES `product` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_HAVE_PROMOTIONS` FOREIGN KEY (`ID_PROMOTION`) REFERENCES `promotions` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `FK_HAVE_ORDERS` FOREIGN KEY (`ID_CUSTOMER`) REFERENCES `user` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_PROCESS_ORDERS` FOREIGN KEY (`ID_ADMIN`) REFERENCES `user` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `FK_HAVE_CATEGORY` FOREIGN KEY (`ID_CAT`) REFERENCES `category` (`ID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_HAVE_UNITS` FOREIGN KEY (`ID_UNIT`) REFERENCES `unit` (`ID`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
