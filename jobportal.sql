-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 21, 2014 at 07:44 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `jobportal`
--

-- --------------------------------------------------------

--
-- Table structure for table `jobprov`
--

CREATE TABLE IF NOT EXISTS `jobprov` (
  `pna` text,
  `pma` text,
  `ppas` text,
  `pph` decimal(11,0) DEFAULT NULL,
  `pcomp` text,
  `head` text,
  `ptit` text,
  `pdet` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jobprov`
--

INSERT INTO `jobprov` (`pna`, `pma`, `ppas`, `pph`, `pcomp`, `head`, `ptit`, `pdet`) VALUES
('xyz', 'xyz@yahoo.com', 'xyzhello', '9871234560', 'linde', 'Banglore', 'accountant', 'experience-2yrs\r\nsalary-25000');

-- --------------------------------------------------------

--
-- Table structure for table `jobseek`
--

CREATE TABLE IF NOT EXISTS `jobseek` (
  `sna` text,
  `sma` text,
  `spas` text,
  `sph` decimal(11,0) DEFAULT NULL,
  `sgen` char(1) DEFAULT NULL,
  `sage` int(11) DEFAULT NULL,
  `snat` text,
  `skill` text,
  `sjob` text,
  `swork` text,
  `syr` int(11) DEFAULT NULL,
  `sm` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jobseek`
--

INSERT INTO `jobseek` (`sna`, `sma`, `spas`, `sph`, `sgen`, `sage`, `snat`, `skill`, `sjob`, `swork`, `syr`, `sm`) VALUES
('abc', 'abc@yahoo.com', 'abchello', '9876543210', 'f', 20, 'indian', 'reading,music', 'HR', 'Pune', 0, 6);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id` int(11) DEFAULT NULL,
  `pas` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `pas`) VALUES
(1, 'admin'),
(2, 'stud');
