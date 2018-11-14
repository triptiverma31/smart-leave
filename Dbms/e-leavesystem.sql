-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2018 at 10:50 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e-leavesystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `apply_for_leave`
--

CREATE TABLE `apply_for_leave` (
  `emp_id` varchar(20) NOT NULL,
  `department` varchar(20) NOT NULL,
  `leave_from` date NOT NULL,
  `leave_to` date NOT NULL,
  `reason` text,
  `address_when_out_of_station` text,
  `contact_no` int(10) DEFAULT NULL,
  `date_of_apply` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `leave_type` varchar(100) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `emp_id` varchar(20) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) DEFAULT NULL,
  `email_id` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `designation` varchar(30) DEFAULT NULL,
  `department` varchar(30) NOT NULL,
  `gender` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`emp_id`, `fname`, `lname`, `email_id`, `password`, `designation`, `department`, `gender`) VALUES
('123', 'aaa', 'bbb', 'asdf@yahoo.com', 'asd4', 'registrar', 'csed', ''),
('2015ca67', 'manu', 'verma', 'harsh@outlook.com', '123456', 'hod', 'csed', 'male'),
('2016ca11', 'mona', 'kumari', 'mona@gmail.com', 'mona@123', 'associate_professor', 'csed', 'female'),
('2016ca78', 'zehra', 'naqvi', 'zehra@gmail.com', '123456', 'hod', 'sms', 'male'),
('2016ca81', 'shubham', 'pandey', 'shubham@gmail.com', 'shubhi', 'registrar', 'sms', 'female'),
('2016ca82', 'charul', 'patel', 'charu@gmail.com', '12345', 'g_faculty', 'csed', 'female'),
('2016ca89', 'tripti', 'verma', 'vermatripti31@gmail.com', '12345', 'hod', 'csed', 'female'),
('ndjnvjfd', 'tktir fdvi ', 'bnjhu duhud', 'jnfdj@gmail', 'bhyg', 'hod', 'sms', 'male'),
('s', 'w', 'dsd', 'ds@hgh.vh', '789456123', 'hod', 'csed', 'male');

-- --------------------------------------------------------

--
-- Table structure for table `leave_details`
--

CREATE TABLE `leave_details` (
  `name_of_leave` varchar(100) NOT NULL,
  `days` smallint(10) DEFAULT NULL,
  `gender` varchar(20) NOT NULL,
  `hod` varchar(20) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `registrar` varchar(20) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `leave_providers`
--

CREATE TABLE `leave_providers` (
  `head_id` varchar(20) NOT NULL,
  `fname` varchar(25) NOT NULL,
  `lname` varchar(25) NOT NULL,
  `department` varchar(25) NOT NULL,
  `designation` varchar(25) NOT NULL,
  `password` varchar(255) NOT NULL,
  `gender` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `leave_providers`
--

INSERT INTO `leave_providers` (`head_id`, `fname`, `lname`, `department`, `designation`, `password`, `gender`) VALUES
('2016ca81', 'shubham', 'pandey', 'sms', 'registrar', 'shubhi', 'female'),
('2015ca67', 'manu', 'verma', 'csed', 'hod', '123456', 'male'),
('ndjnvjfd', 'tktir fdvi ', 'bnjhu duhud', 'sms', 'hod', 'bhyg', 'male'),
('123', 'aaa', 'bbb', 'csed', 'registrar', 'asd4', ''),
('2016ca78', 'zehra', 'naqvi', 'sms', 'hod', '123456', 'male'),
('s', 'w', 'dsd', 'csed', 'hod', '789456123', 'male');

-- --------------------------------------------------------

--
-- Table structure for table `remaining_leave`
--

CREATE TABLE `remaining_leave` (
  `emp_id` varchar(20) NOT NULL,
  `commuted` tinyint(4) NOT NULL DEFAULT '16',
  `earn` tinyint(4) NOT NULL DEFAULT '30',
  `half_pay` tinyint(4) NOT NULL,
  `medical` tinyint(4) NOT NULL DEFAULT '30',
  `special_cl` tinyint(4) NOT NULL DEFAULT '15',
  `restricted` tinyint(4) NOT NULL DEFAULT '2',
  `vacation` smallint(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `remaining_leave`
--

INSERT INTO `remaining_leave` (`emp_id`, `commuted`, `earn`, `half_pay`, `medical`, `special_cl`, `restricted`, `vacation`) VALUES
('123', 8, 15, 15, 15, 15, 2, 28),
('2015ca67', 8, 15, 15, 15, 15, 2, 28),
('2016ca78', 8, 15, 15, 15, 15, 2, 28),
('2016ca82', 8, 15, 15, 15, 15, 2, 28),
('ndjnvjfd', 8, 15, 15, 15, 15, 2, 28),
('s', 8, 15, 15, 15, 15, 2, 28);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `apply_for_leave`
--
ALTER TABLE `apply_for_leave`
  ADD PRIMARY KEY (`emp_id`,`department`,`leave_from`,`leave_to`) USING BTREE;

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`emp_id`);

--
-- Indexes for table `leave_details`
--
ALTER TABLE `leave_details`
  ADD PRIMARY KEY (`name_of_leave`) USING BTREE;

--
-- Indexes for table `remaining_leave`
--
ALTER TABLE `remaining_leave`
  ADD PRIMARY KEY (`emp_id`) USING BTREE;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `apply_for_leave`
--
ALTER TABLE `apply_for_leave`
  ADD CONSTRAINT `apply_for_leave_ibfk_1` FOREIGN KEY (`emp_id`) REFERENCES `faculty` (`emp_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
