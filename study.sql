-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 06, 2019 at 02:33 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `study`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_info`
--

CREATE TABLE `admin_info` (
  `adminId` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `admin_info`
--

INSERT INTO `admin_info` (`adminId`, `name`, `email`, `password`) VALUES
(1, 'Rasel Ahmed', 'mail@raselahmed.com', '123456'),
(2, 'Admin', 'mizan@gmail.com', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `course_info`
--

CREATE TABLE `course_info` (
  `universityId` int(11) NOT NULL,
  `universityName` varchar(200) COLLATE utf8mb4_bin NOT NULL,
  `programType` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  `fieldOfStudy` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  `country` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  `ielts` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  `cgpa` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  `gre` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  `toefl` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  `courseDuration` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  `courseFees` float NOT NULL,
  `updatedAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `course_info`
--

INSERT INTO `course_info` (`universityId`, `universityName`, `programType`, `fieldOfStudy`, `country`, `ielts`, `cgpa`, `gre`, `toefl`, `courseDuration`, `courseFees`, `updatedAt`) VALUES
(11, 'California Institute of Technology', 'undergraduate', 'Computer Science', 'United States', '7.5', '3.00', '', '', '36 Months', 45000, '2019-01-05 12:47:00'),
(12, 'California Institute of Technology', 'undergraduate', 'Computer Science', 'United States', '7.5', '3.00', '', '', '36 Months', 45000, '2019-01-05 12:47:00'),
(13, 'Massachusetts Institute of Technology', 'undergraduate', 'Applied Computer Science', 'United States', '6.5', '3.25', '', '', ' 48 Months', 80000, '2019-01-06 13:07:02'),
(14, 'Yale University', 'undergraduate', 'Biochemistry', 'United States', '5.5', '3.5', '', '', ' 48 Months', 65000, '2019-01-06 13:21:02'),
(15, 'University of Pennsylvania', 'postgraduate', 'Electrical Engineering', 'United Kingdom', '6.0', '3.25', '', '', ' 24 Months', 25000, '2019-01-06 13:32:19');

-- --------------------------------------------------------

--
-- Table structure for table `student_info`
--

CREATE TABLE `student_info` (
  `studentId` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  `universityName` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  `programType` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  `fieldOfStudy` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  `country` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  `lastInstitution` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  `lastDegree` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  `studentCgpa` varchar(5) COLLATE utf8mb4_bin NOT NULL,
  `cgpaScale` int(2) NOT NULL,
  `studentIelts` varchar(10) COLLATE utf8mb4_bin NOT NULL,
  `studentGre` int(50) NOT NULL,
  `updatedAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `student_info`
--

INSERT INTO `student_info` (`studentId`, `name`, `email`, `universityName`, `programType`, `fieldOfStudy`, `country`, `lastInstitution`, `lastDegree`, `studentCgpa`, `cgpaScale`, `studentIelts`, `studentGre`, `updatedAt`) VALUES
(1, 'Rasel Ahmed', ' mail@raselahmed.ml', 'California Institute of Technology', 'postgraduate', 'Computer Science', 'Canada', 'Leading University', 'undergraduate', '3.5', 4, '7.0', 0, '2019-01-03 16:23:33'),
(2, 'Mizan', ' mizan@gmail.com', 'Yale University', 'undergraduate', '', 'United States', 'Leading University', 'undergraduate', '3.5', 4, '7.0', 0, '2019-01-06 13:26:25');

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `userId` int(11) NOT NULL,
  `firstName` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  `lastName` varchar(50) COLLATE utf8mb4_bin NOT NULL,
  `userName` varchar(50) COLLATE utf8mb4_bin NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  `password` varchar(50) COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`userId`, `firstName`, `lastName`, `userName`, `email`, `password`) VALUES
(3, 'Rasel', 'Ahmed', ' elubilu', 'ahmedrusseel@gmai.com', 'e10adc3949ba59abbe56e057f20f883e'),
(4, 'Rasel', 'Ahmed', ' elubilu', 'ahmedrusseel@gmai.com', 'e10adc3949ba59abbe56e057f20f883e'),
(5, 'Rasel', 'Ahmed', ' elubilu', 'ahmedrusseel@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(6, 'Rasel', 'Ahmed', ' elubilu', 'ahmedrusseel@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(7, 'Rasel', 'Ahmed', ' elubilu', 'ahmedrusseel@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(8, 'Rasel', 'Ahmed', ' elubilu', 'ahmedrusseel@gmail.com', 'e10adc3949ba59abbe56e057f20f883e');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_info`
--
ALTER TABLE `admin_info`
  ADD PRIMARY KEY (`adminId`);

--
-- Indexes for table `course_info`
--
ALTER TABLE `course_info`
  ADD PRIMARY KEY (`universityId`);

--
-- Indexes for table `student_info`
--
ALTER TABLE `student_info`
  ADD PRIMARY KEY (`studentId`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_info`
--
ALTER TABLE `admin_info`
  MODIFY `adminId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `course_info`
--
ALTER TABLE `course_info`
  MODIFY `universityId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `student_info`
--
ALTER TABLE `student_info`
  MODIFY `studentId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
