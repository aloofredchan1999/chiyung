-- phpMyAdmin SQL Dump
-- version 3.3.0
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 24, 2018 at 09:41 AM
-- Server version: 5.1.44
-- PHP Version: 5.2.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `smartcarpark`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--
-- Creation: Feb 24, 2018 at 05:40 PM
-- Last update: Feb 24, 2018 at 05:40 PM
--

CREATE TABLE IF NOT EXISTS `admin` (
  `adminID` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `adminName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `adminPw` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`adminID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admin`
--


-- --------------------------------------------------------

--
-- Table structure for table `customer`
--
-- Creation: Feb 24, 2018 at 05:03 PM
-- Last update: Feb 24, 2018 at 05:03 PM
--

CREATE TABLE IF NOT EXISTS `customer` (
  `CustomerID` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `CustomerType` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `CustomerName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `CustomerPw` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `CustomerTel` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `CustomerUseCount` int(10) NOT NULL,
  ` CustomerTimeCount` time NOT NULL,
  `CustomerPrice` int(10) NOT NULL,
  PRIMARY KEY (`CustomerID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `customer`
--


-- --------------------------------------------------------

--
-- Table structure for table `mall`
--
-- Creation: Feb 24, 2018 at 05:00 PM
-- Last update: Feb 24, 2018 at 05:00 PM
--

CREATE TABLE IF NOT EXISTS `mall` (
  `MallID` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `MallName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`MallID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `mall`
--

