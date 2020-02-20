-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 20, 2020 at 06:59 AM
-- Server version: 5.6.44
-- PHP Version: 5.3.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";



/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `student`
--

-- --------------------------------------------------------

--
-- Table structure for table `student_record`
--

CREATE TABLE IF NOT EXISTS `student_record` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `address` varchar(255) NOT NULL,
  `marks` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `student_record`
--

INSERT INTO `student_record` (`id`, `name`, `address`, `marks`) VALUES
(1, 'Akash', 'Noida', 400),
(2, 'Mukesh', 'Delhi', 500),
(3, 'Anand', 'Ghaziabad', 500),
(4, 'Ajay', 'Lucknow', 400),
(5, 'Vijay', 'NCR', 150),
(6, 'Nikita', 'Patna', 240),
(7, 'Nisha', 'Okala', 900),
(8, 'Sanjay', 'Chandigarh', 760);
