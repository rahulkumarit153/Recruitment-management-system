-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 13, 2015 at 03:02 PM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `register`
--

-- --------------------------------------------------------

--
-- Table structure for table `form1`
--

CREATE TABLE IF NOT EXISTS `form1` (
  `name` varchar(100) NOT NULL,
  `father` varchar(100) NOT NULL,
  `mother` varchar(100) NOT NULL,
  `dob` varchar(30) NOT NULL,
  `catagory` varchar(30) NOT NULL,
  `language` varchar(30) NOT NULL,
  `area` varchar(20) NOT NULL,
  `marital_status` varchar(25) NOT NULL,
  `religion` varchar(30) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `nation` varchar(30) NOT NULL,
  `blood_group` varchar(10) NOT NULL,
  `any_disability` varchar(30) NOT NULL,
  `user_id` varchar(30) NOT NULL,
  `password` varchar(15) NOT NULL,
  `repassword` varchar(15) NOT NULL,
  `degree1` varchar(15) NOT NULL,
  `institute1` varchar(15) NOT NULL,
  `board1` varchar(15) NOT NULL,
  `full_mark1` int(15) NOT NULL,
  `mark1` int(15) NOT NULL,
  `division1` varchar(15) NOT NULL,
  `degree2` varchar(15) NOT NULL,
  `institute2` varchar(15) NOT NULL,
  `board2` varchar(15) NOT NULL,
  `full_mark2` int(15) NOT NULL,
  `mark2` int(15) NOT NULL,
  `division2` varchar(15) NOT NULL,
  `degree3` varchar(15) NOT NULL,
  `institute3` varchar(15) NOT NULL,
  `board3` varchar(15) NOT NULL,
  `full_mark3` int(15) NOT NULL,
  `mark3` int(15) NOT NULL,
  `division3` varchar(15) NOT NULL,
  `pic` varchar(40) NOT NULL,
  `adress1` varchar(100) NOT NULL,
  `district1` varchar(15) NOT NULL,
  `locality` varchar(15) NOT NULL,
  `state1` varchar(15) NOT NULL,
  `pin1` varchar(10) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `telephone` varchar(15) NOT NULL,
  `adress2` varchar(40) NOT NULL,
  `district2` varchar(50) NOT NULL,
  `city` varchar(20) NOT NULL,
  `state2` varchar(20) NOT NULL,
  `pin2` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `form1`
--


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
