-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 02, 2023 at 03:49 PM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `wfdp`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` text NOT NULL,
  `admin_name` text NOT NULL,
  `admin_pass` text NOT NULL,
  `repass` text NOT NULL,
  `type` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_name`, `admin_pass`, `repass`, `type`) VALUES
('divy@123', 'Divyesh Joshi', 'divyesh21', 'divyesh21', 'Admin'),
('divy@123', 'Divyesh Joshi', 'divyesh21', 'divyesh21', 'DEV'),
('ram@god', 'Ram', '123', '123', 'admin'),
('i@admin', 'aoma', '321', '321', 'admin'),
('rosh@03', 'Roshni Patil', 'roshni@03', 'roshni@03', 'Designer'),
('six', 'six', 'six', 'xis', 'dev'),
('six', 'six', 'six', 'xis', 'dev'),
('seven', 'seven', 'seven', 'seev', 'sev'),
('seven', 'seven', 'seven', 'seev', 'sev'),
('seven', 'seven', 'seven', 'seev', 'sev'),
('seven', 'seven', 'seven', 'seev', 'sev'),
('seven', 'seven', 'seven', 'seev', 'sev'),
('seven', 'seven', 'seven', 'seev', 'sev'),
('seven', 'seven', 'seven', 'seev', 'sev');

-- --------------------------------------------------------

--
-- Table structure for table `giver`
--

CREATE TABLE IF NOT EXISTS `giver` (
  `givid` int(7) NOT NULL,
  `name` text NOT NULL,
  `addr` text NOT NULL,
  `city` text NOT NULL,
  `cont_no` double NOT NULL,
  `email_id` text NOT NULL,
  `password` text NOT NULL,
  `occupation` text NOT NULL,
  KEY `cont_no` (`cont_no`),
  KEY `givid` (`givid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `giver`
--

INSERT INTO `giver` (`givid`, `name`, `addr`, `city`, `cont_no`, `email_id`, `password`, `occupation`) VALUES
(1000, 'Neha joshi', 'Shree shakti saw mil nardana', 'nardana', 9960280839, 'neha9joshi@gmail.com', '090493', 'Freelancer'),
(1001, 'Anil Suryavanshi', 'professor colony', 'dhule', 9512356699, 'anilkumar@gmail.com', '987654321', 'boring'),
(1002, 'Divyesh Joshi', '1107, Shree Shakti Saw mil', 'Dhule', 7387321324, 'divyesh21joshi.dj@gmail.com', 'divyesh21joshi', 'Student'),
(1003, 'Nikhil Joshi', '1107, Shree Shakti Saw mil', 'Dhule', 8007010080, 'divyesh21joshi.dj@gmail.com', '152123', 'Frreelancing'),
(1004, 'Aatmaram Bhide', 'Gokuldhaam society goregoan west', 'Goregoan', 7366452155, 'ekmevseceratory@gmail.com', 'kayte@123', 'Shikshak'),
(1005, 'Roshni Patil', 'Girls hostel', 'deopur', 7499088634, 'pagalroshni@gmail.com', 'rosh@123', 'rikami');

-- --------------------------------------------------------

--
-- Table structure for table `giver_trans`
--

CREATE TABLE IF NOT EXISTS `giver_trans` (
  `srno` int(11) NOT NULL,
  `givid` int(7) NOT NULL,
  `givdate` date NOT NULL,
  `event` text NOT NULL,
  `reason` text NOT NULL,
  `persons` int(11) NOT NULL,
  `oftime` text NOT NULL,
  `remark` text NOT NULL,
  `status` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `giver_trans`
--

INSERT INTO `giver_trans` (`srno`, `givid`, `givdate`, `event`, `reason`, `persons`, `oftime`, `remark`, `status`) VALUES
(1, 1000, '2023-02-22', 'wedding', 'got some extra food', 5, '7 hrs', 'it should be picked after 2 hr of this post', 'excellent'),
(3, 1001, '2023-02-23', 'FUN FAIR', 'got some extra food', 15, '2', 'You have to pick it with your own vehical', 'good'),
(2, 1002, '2023-02-25', 'Residency hall', 'waste food (non eatable)', 5, '1', 'i want to give this waste food for any other use rather than garbage', 'waste'),
(4, 1003, '2023-02-05', 'party', 'remain food ', 11, '2', 'COLLECT PLEASE', 'VERY GOOD'),
(5, 1004, '2200-02-06', 'AD', 'sas', 3, 'sw', '3', 'wwwwwwww'),
(6, 1001, '2023-04-02', 'wedding', 'remain food ', 6, '14:02', 'it should be picked after 2 hr of this post', 'good'),
(7, 1002, '2023-04-03', 'party', 'waste food (non eatable)', 2, '16:36', 'use for fertilizer ', 'waste'),
(8, 1002, '2023-04-03', 'party', 'waste food (non eatable)', 100, '16:36', 'use for fertilizer ', 'waste'),
(9, 1002, '2023-04-03', 'party', 'waste food (non eatable)', 100, '16:36', 'use for fertilizer ', 'waste'),
(10, 1002, '2023-04-03', 'party', 'waste food (non eatable)', 100, '16:36', 'use for fertilizer ', 'waste'),
(11, 1000, '2023-04-03', 'wedding', 'got some extra food', 84, '18:15', 'i want to give this waste food for any other use rather than garbage', 'VERY GOOD'),
(12, 1001, '2023-04-09', 'wedding', 'got some extra food', 84, '15:00', 'COLLECT PLEASE', 'VERY GOOD'),
(13, 1000, '2023-04-11', 'wedding', 'got some extra food', 120, '15:10', 'it should be picked after 2 hr of this post', 'waste'),
(14, 1002, '2023-04-12', '1', '1', 1, '01:11', '1', '1'),
(15, 1002, '2023-04-12', '1', '1', 100, '01:11', '1', '1'),
(16, 1004, '2023-04-27', 'wedding', 'want to donate ', 10, '15:37', 'collect fast', 'great'),
(17, 1002, '2023-04-27', 'wedding', 'remain food ', 10, '15:40', 'COLLECT PLEASE', 'good'),
(18, 1002, '2023-04-27', 'wedding', 'remain food ', 100, '15:40', 'COLLECT PLEASE', 'good'),
(19, 1000, '2023-05-01', 'marriage', 'extra', 50, '18:17', 'good food', 'N');

-- --------------------------------------------------------

--
-- Table structure for table `taker`
--

CREATE TABLE IF NOT EXISTS `taker` (
  `takid` int(7) NOT NULL,
  `name` text NOT NULL,
  `addr` text NOT NULL,
  `city` text NOT NULL,
  `cont_no` double NOT NULL,
  `email_id` text NOT NULL,
  `password` text NOT NULL,
  `org_type` text NOT NULL,
  `persons` int(11) NOT NULL,
  `sub_type` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `taker`
--

INSERT INTO `taker` (`takid`, `name`, `addr`, `city`, `cont_no`, `email_id`, `password`, `org_type`, `persons`, `sub_type`) VALUES
(1000, 'Neha Joshi', '1107, Shree Shakti Saw mil', 'Dhule', 9960280839, 'neha99joshi@gmail.com', '4567', 'orignal', 100, 'subeik'),
(1001, 'Anil Suryavanshi', 'professor colony', 'dhule', 9512356699, 'anilkumar@gmail.com', '987654321', 'hotel', 70, 'none'),
(1002, 'Divyesh Joshi', '1107, Shree Shakti Saw mil', 'Dhule', 7387321324, 'divyesh21joshi.dj@gmail.com', '1234', 'orignal', 50, 'blajuh'),
(1003, 'ram', 'ram mandir ayodhya ', 'ayodhya', 9876543210, 'MaryadaPurshotam@gmail.com', 'seeta', 'trust', 200, 'temple'),
(1004, 'MANOJ', 'pimpri', 'pune', 9511445566, 'url@gmail.com', '12345', 'orgwd', 150, 'subeik');

-- --------------------------------------------------------

--
-- Table structure for table `taker_trans`
--

CREATE TABLE IF NOT EXISTS `taker_trans` (
  `srno` int(11) NOT NULL,
  `takid` int(7) NOT NULL,
  `trdate` date NOT NULL,
  `persons` int(11) NOT NULL,
  `oftime` text NOT NULL,
  `status` text NOT NULL,
  `givid` int(7) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `taker_trans`
--

INSERT INTO `taker_trans` (`srno`, `takid`, `trdate`, `persons`, `oftime`, `status`, `givid`) VALUES
(1, 1000, '2023-02-23', 2, '4', 'goood ', 1000),
(2, 1001, '2023-02-25', 4, '5', 'bad', 1001),
(3, 1002, '2023-02-27', 5, '2', 'excellent', 1002),
(4, 1001, '2023-04-09', 120, '03:00 PM', 'waste', 1000),
(5, 1000, '2023-04-27', 10, '15:39', 'good', 1001);
