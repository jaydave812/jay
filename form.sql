-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 29, 2018 at 09:45 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `registrationform`
--

-- --------------------------------------------------------

--
-- Table structure for table `form`
--

CREATE TABLE IF NOT EXISTS `form` (
  `fname` varchar(10) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `address` varchar(50) NOT NULL,
  `email` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `form`
--

INSERT INTO `form` (`fname`, `phone`, `address`, `email`) VALUES
('jay@dg.com', '', '', ''),
('jay@dg.com', '', '', ''),
('jay@dg.com', '', '', ''),
('jay@dg.com', '', '', ''),
('jay@dg.com', '', '', ''),
('Faizan.C@g', '', '', ''),
('jay', '9896847474', 'miraroad', 'Faizan.C@gmail.com'),
('jay', '9896847474', 'miraroad', 'jay@dg.com'),
('jay', '9896847474', 'miraroad', 'jay@dg.com'),
('jay', '9896847474', 'miraroad', 'jay@dg.com'),
('jay', '9896847474', 'miraroad', 'jay@dg.com'),
('faizan', '9896847474', 'miraroad', 'Faizan.C@gmail.com');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
