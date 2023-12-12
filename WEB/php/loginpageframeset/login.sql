-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 12, 2023 at 05:52 PM
-- Server version: 5.7.33-0ubuntu0.16.04.1
-- PHP Version: 7.0.33-0ubuntu0.16.04.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login`
--

-- --------------------------------------------------------

--
-- Table structure for table `marks`
--

CREATE TABLE `marks` (
  `ktuid` varchar(20) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `semester` varchar(2) NOT NULL,
  `subject` varchar(20) NOT NULL,
  `series1` varchar(3) NOT NULL,
  `series2` varchar(3) NOT NULL,
  `assignment1` varchar(3) NOT NULL,
  `assignment2` varchar(3) NOT NULL,
  `attendance` varchar(4) NOT NULL,
  `internal` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `marks`
--

INSERT INTO `marks` (`ktuid`, `fname`, `lname`, `semester`, `subject`, `series1`, `series2`, `assignment1`, `assignment2`, `attendance`, `internal`) VALUES
('CET22MCA-2018', 'Pranav', 'P', 'S2', 'DAA', '40', '40', '10', '10', '88', '33'),
('TVE23MCA-2016', 'Anandakrishnan', 'A', 'S1', 'MATHS', '18', '22', '7', '5', '65', '14'),
('TVE23MCA-2024', 'Dalbin', 'Mathew', 'S1', 'DFCA', '45', '40', '12', '12', '89', '36'),
('TVE23MCA-2024', 'Dalbin', 'Mathew', 'S1', 'MATHS', '48', '47', '12', '12', '99', '39');

-- --------------------------------------------------------

--
-- Table structure for table `studentregistration`
--

CREATE TABLE `studentregistration` (
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `ktuid` varchar(15) NOT NULL,
  `semester` varchar(2) NOT NULL,
  `rollno` varchar(3) NOT NULL,
  `gender` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `studentregistration`
--

INSERT INTO `studentregistration` (`fname`, `lname`, `ktuid`, `semester`, `rollno`, `gender`) VALUES
('Pranav', 'P', 'CET22MCA-2018', 'S2', '18', 'MALE'),
('Anandakrishnan', 'A', 'TVE23MCA-2016', 'S1', '16', 'MALE'),
('Dalbin', 'Mathew', 'TVE23MCA-2024', 'S1', '24', 'MALE');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `subject` varchar(20) NOT NULL,
  `subjectid` varchar(10) NOT NULL,
  `semester` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`subject`, `subjectid`, `semester`) VALUES
('MATHS', '20MCA101', 'S1'),
('DFCA', '20MCA103', 'S1'),
('ADS', '20MCA105', 'S1'),
('ASE', '20MCA107', 'S1'),
('DAA', '545', 'S2');

-- --------------------------------------------------------

--
-- Table structure for table `userdetails`
--

CREATE TABLE `userdetails` (
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `age` varchar(3) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` varchar(13) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userdetails`
--

INSERT INTO `userdetails` (`fname`, `lname`, `age`, `email`, `phone`, `username`, `password`) VALUES
('admin', '', '', 'admin@cet.ac.in', '', 'admin', 'admin'),
('Anandakrishnan', 'A', '22', 'anandanil@gmail.com', '+919072114567', 'anandan', 'anandan'),
('Dalbin', 'Mathew', '21', 'dalbinmathew10@gmail.com', '+919072118584', 'dalbinmathew', 'dalbinmathew');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `marks`
--
ALTER TABLE `marks`
  ADD PRIMARY KEY (`ktuid`,`subject`);

--
-- Indexes for table `studentregistration`
--
ALTER TABLE `studentregistration`
  ADD PRIMARY KEY (`ktuid`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`subjectid`);

--
-- Indexes for table `userdetails`
--
ALTER TABLE `userdetails`
  ADD PRIMARY KEY (`username`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
