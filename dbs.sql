-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 06, 2018 at 06:37 AM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbs`
--

-- --------------------------------------------------------

--
-- Table structure for table `addbooks`
--

DROP TABLE IF EXISTS `addbooks`;
CREATE TABLE IF NOT EXISTS `addbooks` (
  `username` varchar(20) NOT NULL,
  `bookname` varchar(20) NOT NULL,
  `author` varchar(20) NOT NULL,
  `edition` varchar(100) NOT NULL,
  `category` varchar(500) NOT NULL,
  `rent` varchar(500) NOT NULL,
  `publisher` varchar(500) NOT NULL,
  `image` longblob NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `borrowbook`
--

DROP TABLE IF EXISTS `borrowbook`;
CREATE TABLE IF NOT EXISTS `borrowbook` (
  `userid` int(11) NOT NULL,
  `numdays` int(11) NOT NULL,
  `purchaseddate` date NOT NULL,
  `bookdescription` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `contactform`
--

DROP TABLE IF EXISTS `contactform`;
CREATE TABLE IF NOT EXISTS `contactform` (
  `name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

DROP TABLE IF EXISTS `signup`;
CREATE TABLE IF NOT EXISTS `signup` (
  `name` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `address` varchar(111) NOT NULL,
  `country` varchar(100) NOT NULL,
  `email` varchar(20) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`name`, `username`, `password`, `phone`, `address`, `country`, `email`) VALUES
('ravi', 'raviteja', '123', '1234567890', 'vanasthalipuram', 'india', 'raviteja@gmail.com');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
