-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2019 at 07:46 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `educa`
--

-- --------------------------------------------------------

--
-- Table structure for table `routines`
--

CREATE TABLE IF NOT EXISTS `routines` (
  `id` int(11) NOT NULL,
  `s_name` varchar(255) NOT NULL,
  `dept` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL,
  `sem` varchar(255) NOT NULL,
  `sec` varchar(255) NOT NULL,
  `c_title` varchar(255) NOT NULL,
  `c_code` varchar(255) NOT NULL,
  `c_teacher` varchar(255) NOT NULL,
  `s_time` varchar(255) NOT NULL,
  `e_time` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `routines`
--

INSERT INTO `routines` (`id`, `s_name`, `dept`, `year`, `sem`, `sec`, `c_title`, `c_code`, `c_teacher`, `s_time`, `e_time`) VALUES
(1, 'sp-19', 'cse', '1st', '1st', 'A', 'cse', 'cse-1101', 'mr. rahim', '8 am', '9 am'),
(4, 'sp-17', 'CSE', '3rd', '2nd', 'A', 'SDP', 'CSE-3104', 'Asif sir', '8:00 am', '10:30 am'),
(5, 'sp-17', 'CSE', '3rd', '2nd', 'A', 'IPL', 'CSE-3102', 'Tajul sir', '9:00 am', '10:00 am');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `routines`
--
ALTER TABLE `routines`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `routines`
--
ALTER TABLE `routines`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
