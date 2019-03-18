-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 18, 2019 at 07:36 AM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tourist_guide`
--

-- --------------------------------------------------------

--
-- Table structure for table `district`
--

CREATE TABLE `district` (
  `D_id` int(11) NOT NULL,
  `district_name` varchar(50) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `district`
--

INSERT INTO `district` (`D_id`, `district_name`, `status`) VALUES
(1, 'Trivandrum', 1),
(2, 'kollam', 1);

-- --------------------------------------------------------

--
-- Table structure for table `login_tbl`
--

CREATE TABLE `login_tbl` (
  `userid` int(11) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `user_type` varchar(10) NOT NULL,
  `status` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_tbl`
--

INSERT INTO `login_tbl` (`userid`, `user_name`, `password`, `user_type`, `status`) VALUES
(1, 'admin@gmail.com', 'admin', '1', '1'),
(26, 'nandhu@gmail.com', '123', '2', '1'),
(29, 'amal@gmail.com', '123', '2', '1'),
(31, 's@gmail.com', '123', '2', '1'),
(32, 'mith@gmail.com', 'asd', '2', '1'),
(34, 'dd@gmail.com', 'nmb', '2', '1'),
(37, 's@gmail.com', '098', '2', '1'),
(42, '', '', '2', '1'),
(49, 'arun@gmail.com', '123', '2', '1'),
(62, 'sudhimonts@mca.ajce.in', '123', '2', '1'),
(69, 'abc@gmail.com', 'abc', '2', '1');

-- --------------------------------------------------------

--
-- Table structure for table `org_tbl`
--

CREATE TABLE `org_tbl` (
  `org_id` int(11) NOT NULL,
  `org_name` varchar(30) NOT NULL,
  `org_type` varchar(30) NOT NULL,
  `org_desc` varchar(50) NOT NULL,
  `licno` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `org_tbl`
--

INSERT INTO `org_tbl` (`org_id`, `org_name`, `org_type`, `org_desc`, `licno`) VALUES
(1, '', '', '', ''),
(2, 'fghjk', 'gfhjk', 'gfhjkl', '5678'),
(3, 'fghjkl', 'fghjkl', 'fghjk', '9087'),
(4, 'dfghjkl', 'fghjk', 'tghjk', '56789'),
(5, 'abc', 'res', 'hxjass', '456321');

-- --------------------------------------------------------

--
-- Table structure for table `users_registration_tbl`
--

CREATE TABLE `users_registration_tbl` (
  `userid` int(11) NOT NULL,
  `First_name` varchar(50) NOT NULL,
  `Last_name` varchar(50) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `profile_pic` varchar(100) NOT NULL,
  `Place` varchar(50) NOT NULL,
  `D_id` int(10) NOT NULL,
  `Mobile` varchar(20) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `org_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_registration_tbl`
--

INSERT INTO `users_registration_tbl` (`userid`, `First_name`, `Last_name`, `Address`, `Email`, `profile_pic`, `Place`, `D_id`, `Mobile`, `Gender`, `org_id`) VALUES
(26, 'dssff', 'fgdfgfdgfd', 'gfgdgdfgdfg', 'nandhu@gmail.com', '', 'dffdsf', 0, '1234555', '', 0),
(29, 'hgdsjk', 'bdsjklx', 'hjdkl', 'amal@gmail.com', '', 'gfds', 0, '56432', '', 0),
(32, 'mith', 'mith', 'asad', 'mith@gmail.com', '', 'adsdasd', 0, '1432434543', '', 0),
(37, 'nandhu', 'ddd', 'fghjk', 's@gmail.com', '', 'hjk', 0, '415455', '', 0),
(38, 'nandhu', 'ddd', 'fghjk', 's@gmail.com', '', 'hjk', 0, '415455', '', 0),
(39, 'nandhu', 'ddd', 'fghjk', 's@gmail.com', '', 'hjk', 0, '415455', '', 0),
(40, 'nandhu', 'ddd', 'fghjk', 's@gmail.com', '', 'hjk', 0, '415455', '', 0),
(41, 'nandhu', 'ddd', 'fghjk', 's@gmail.com', '', 'hjk', 0, '415455', '', 0),
(42, '', '', '', '', '../upload/', '', 0, '', '', 0),
(43, '', '', '', '', '../upload/', '', 0, '', '', 0),
(44, '', '', '', '', '../upload/', '', 0, '', '', 0),
(45, '', '', '', '', '../upload/', '', 0, '', '', 0),
(46, '', '', '', '', '../upload/', '', 0, '', '', 0),
(47, '', '', '', '', '../upload/', '', 0, '', '', 0),
(48, '', '', '', '', '../upload/', '', 0, '', '', 0),
(49, 'arun', 't', 'fghjghj', 'arun@gmail.com', '../upload/cat.jpeg', 'fghjk', 0, '9874562532', '', 0),
(50, '', '', '', 's@gmail.com', '../upload/06a50172a29087b0f874e87cd2a6ce2e.jpg', 'ghj', 2, '6789', '', 0),
(51, '', '', '', '', '../upload/', '', 0, '', '', 0),
(52, '', '', '', '', '../upload/', '', 0, '', '', 0),
(53, '', '', '', '', '../upload/', '', 0, '', '', 0),
(54, '', '', '', '', '../upload/', '', 0, '', '', 0),
(55, 'ghjkl', 'hjk', 'ghjk', 's@gmail.com', '../upload/06a50172a29087b0f874e87cd2a6ce2e.jpg', 'ghjk', 0, '56789', '', 0),
(56, '', '', '', 's@gmail.com', '../upload/06a50172a29087b0f874e87cd2a6ce2e.jpg', 'rtyu', 1, '56789', '', 0),
(57, '', '', '', '', '../upload/', '', 0, '', '', 0),
(58, '', '', '', '', '../upload/', '', 0, '', '', 0),
(59, '', '', '', 's@gmail.com', '../upload/06a50172a29087b0f874e87cd2a6ce2e.jpg', 'vbbnm,', 2, '56789', '', 0),
(60, '', '', '', '', '../upload/', '', 0, '', '', 0),
(61, '', '', '', '', '../upload/', '', 0, '', '', 0),
(62, '', '', '', 'sudhimonts@mca.ajce.in', '../upload/9kIsOOf.jpg', 'hbjnk', 2, '546789', '', 0),
(63, '', '', '', 'sudhimonts@mca.ajce.in', '../upload/9kIsOOf.jpg', 'fghjk', 2, '67890', '', 0),
(64, '', '', '', '', '../upload/', '', 0, '', '', 0),
(65, '', '', '', 's@gmail.com', '../upload/06a50172a29087b0f874e87cd2a6ce2e.jpg', 'fghjk', 1, '56789', '', 0),
(66, '', '', '', 's@gmail.com', '../upload/9kIsOOf.jpg', 'gfhjk', 1, '56789', '', 0),
(67, '', '', '', 'amal@gmail.com', '../upload/9kIsOOf.jpg', 'dsfghjk', 1, '56789', '', 4),
(68, 'amal', 'chacko', 'amal house', 'amal@gmail.com', '../upload/530-3.jpg', 'mundakayam', 0, '987456321', '', 0),
(69, '', '', '', 'abc@gmail.com', '../upload/530-3.jpg', 'Zaas', 1, '789544', '', 5);

-- --------------------------------------------------------

--
-- Table structure for table `usertype_tbl`
--

CREATE TABLE `usertype_tbl` (
  `usertypeid` int(11) NOT NULL,
  `usertype` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usertype_tbl`
--

INSERT INTO `usertype_tbl` (`usertypeid`, `usertype`) VALUES
(1, 'admin'),
(2, 'business'),
(3, 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `district`
--
ALTER TABLE `district`
  ADD PRIMARY KEY (`D_id`);

--
-- Indexes for table `login_tbl`
--
ALTER TABLE `login_tbl`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `org_tbl`
--
ALTER TABLE `org_tbl`
  ADD PRIMARY KEY (`org_id`);

--
-- Indexes for table `users_registration_tbl`
--
ALTER TABLE `users_registration_tbl`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `usertype_tbl`
--
ALTER TABLE `usertype_tbl`
  ADD PRIMARY KEY (`usertypeid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `district`
--
ALTER TABLE `district`
  MODIFY `D_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `login_tbl`
--
ALTER TABLE `login_tbl`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `org_tbl`
--
ALTER TABLE `org_tbl`
  MODIFY `org_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users_registration_tbl`
--
ALTER TABLE `users_registration_tbl`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `usertype_tbl`
--
ALTER TABLE `usertype_tbl`
  MODIFY `usertypeid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
