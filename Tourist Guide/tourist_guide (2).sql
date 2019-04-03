-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 03, 2019 at 01:36 PM
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
-- Table structure for table `addplace_tbl`
--

CREATE TABLE `addplace_tbl` (
  `pid` int(11) NOT NULL,
  `place_name` varchar(50) NOT NULL,
  `discription` varchar(150) NOT NULL,
  `image` varchar(50) NOT NULL,
  `D_id` int(11) NOT NULL,
  `contact` varchar(12) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addplace_tbl`
--

INSERT INTO `addplace_tbl` (`pid`, `place_name`, `discription`, `image`, `D_id`, `contact`, `date`) VALUES
(1, 'mundakayam', 'fsfsdfsfsdfdsf', '', 2, '2147483647', '2019-04-03 05:09:43'),
(2, 'mundakayam', 'ferwerwerwerwr', '9874563210', 0, '14', '2019-04-03 06:06:14'),
(3, 'mundakayam', 'ferwerwerwerwr', '9874563210', 0, '14', '2019-04-03 06:08:49'),
(4, 'kumarakom', 'fsfsdfsfsdfdsf', '9865321470', 0, '10', '2019-04-03 06:09:24'),
(5, 'kumarakom', 'fsfsdfsfsdfdsf', '9865321470', 0, '10', '2019-04-03 06:09:59'),
(6, 'kumarakom', 'ferwerwerwerwr', '', 3, '2147483647', '2019-04-03 06:17:16'),
(7, 'kumarakom', 'ferwerwerwerwr', '', 3, '9632587410', '2019-04-03 06:18:28'),
(8, 'kumarakom', 'ferwerwerwerwr', '../upload/110-1600.jpg', 3, '9632587410', '2019-04-03 06:19:59'),
(9, 'kumarakom', 'ferwerwerwerwr', '../upload/110-1600.jpg', 3, '9632587410', '2019-04-03 06:21:43'),
(10, 'kumarakom', 'ferwerwerwerwr', '../upload/110-1600.jpg', 3, '9632587410', '2019-04-03 06:23:39'),
(11, 'kumarakom', 'ferwerwerwerwr', '../upload/110-1600.jpg', 3, '9632587410', '2019-04-03 06:28:53'),
(12, 'kumarakom', 'ferwerwerwerwr', '../upload/110-1600.jpg', 3, '9632587410', '2019-04-03 06:29:34'),
(13, 'kumarakom', 'ferwerwerwerwr', '../upload/110-1600.jpg', 3, '9632587410', '2019-04-03 06:30:13'),
(14, 'kumarakom', 'ferwerwerwerwr', '../upload/110-1600.jpg', 3, '9632587410', '2019-04-03 06:30:47'),
(15, 'vagamon', 'dffhfhfg', '../upload/110-1600.jpg', 5, '9632587410', '2019-04-03 06:31:33'),
(16, 'vagamon', 'dffhfhfg', '../upload/110-1600.jpg', 5, '9632587410', '2019-04-03 06:32:06'),
(17, 'vagamon', 'dffhfhfg', '../upload/110-1600.jpg', 5, '9632587410', '2019-04-03 06:34:01'),
(18, 'vagamon', 'dffhfhfg', '../upload/110-1600.jpg', 5, '9632587410', '2019-04-03 06:34:34'),
(19, 'vagamon', 'dffhfhfg', '../upload/110-1600.jpg', 5, '9632587410', '2019-04-03 06:34:49'),
(20, 'vagamon', 'dffhfhfg', '../upload/110-1600.jpg', 5, '9632587410', '2019-04-03 06:35:30'),
(21, 'vagamon', 'dffhfhfg', '../upload/110-1600.jpg', 5, '9632587410', '2019-04-03 06:35:46'),
(22, 'vagamon', 'dffhfhfg', '../upload/110-1600.jpg', 5, '9632587410', '2019-04-03 06:36:08'),
(23, 'vagamon', 'dffhfhfg', '../upload/110-1600.jpg', 5, '9632587410', '2019-04-03 06:36:18'),
(24, 'vagamon', 'dffhfhfg', '../upload/110-1600.jpg', 5, '9632587410', '2019-04-03 06:36:30'),
(25, 'vagamon', 'dffhfhfg', '../upload/110-1600.jpg', 5, '9632587410', '2019-04-03 06:36:47'),
(26, 'thrissur', 'eqweqeqweq', '../upload/21.jpeg', 7, '9632587410', '2019-04-03 06:37:56'),
(27, 'aruvikuzhy', 'kgjh', 'upload/BMX_Wallpaper_j4tag-1.jpg', 5, '9876541230', '2019-04-03 09:59:24'),
(28, 'manimala', 'jhghgjhg', 'upload/4c9fdb955858ddcb6f03153badb97b11.jpg', 5, '9637412583', '2019-04-03 10:02:41'),
(29, 'abcd', 'mbjhk', '../upload/640-Captain-America-The-First-Avenger-l.', 3, '9630147852', '2019-04-03 10:04:18'),
(30, 'abcde', 'mbjhk', '../upload/640-Captain-America-The-First-Avenger-l.', 3, '9630147852', '2019-04-03 10:05:11'),
(31, 'gjhghjgg', 'mbjhk', '../upload/640-Captain-America-The-First-Avenger-l.', 3, '9630147852', '2019-04-03 10:06:19'),
(32, 'gjhg', 'mbjhk', '../upload/640-Captain-America-The-First-Avenger-l.', 3, '9630147852', '2019-04-03 10:08:11'),
(33, 'gjhgi', 'mbjhk', '../upload/640-Captain-America-The-First-Avenger-l.', 3, '9630147852', '2019-04-03 10:09:30'),
(34, 'jggj', 'gghjg', '../upload/cute-cat.jpg', 11, '9873692581', '2019-04-03 10:11:25'),
(35, 'jggjhgj', 'gghjg', '../upload/110-1600.jpg', 11, '9873692581', '2019-04-03 10:13:00');

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
(2, 'kollam', 1),
(3, 'Pathanamthitta', 1),
(4, 'Alappuzha', 1),
(5, 'Kottayam', 1),
(6, 'Idukki', 1),
(7, 'Ernakulam', 1),
(8, 'Thrissur', 1),
(9, 'Palakkad', 1),
(10, 'Malappuram', 1),
(11, 'Kozhikode', 1),
(12, 'Wayanad', 1),
(13, 'Kannur', 1),
(14, 'Kasaragod', 1);

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
(1, 'rivervally@gmail.com', '76930278bce4ddd6a74c15c2162a59af', '2', '1'),
(2, 'elegance@gmail.com', 'e40edf60d0bc3a63fd01b1203c6aacd2', '2', '1'),
(3, 'rahul@gmail.com', '7b7f71bff78951c020e9c647a32bb839', '3', '1'),
(4, 'admin@gmail.com', '0e7517141fb53f21ee439b355b5a1d0a', '1', '1'),
(6, 'sudhimonthanuvelil@gmail.com', 'c61e6f2e6aab3403ea1c27c445cbf71e', '3', '1'),
(7, 'malu@gmail.com', '154f55ddc2b8c8b598839192617b2bfe', '3', '1'),
(8, 'nandhu@gmail.com', '2055f2a45bea193addcc4b44ce83e396', '3', '1');

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
(4, 'River vally', 'hotel', 'Ac and non Ac', 'kl/05/123654'),
(5, 'Elegance', 'hotel', 'with family reasturant', 'kl/05/213656');

-- --------------------------------------------------------

--
-- Table structure for table `otp`
--

CREATE TABLE `otp` (
  `oid` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `otp` varchar(10) NOT NULL,
  `count` int(10) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `otp`
--

INSERT INTO `otp` (`oid`, `email`, `otp`, `count`, `status`) VALUES
(9, 'sudhimonthanuvelil@gmail.com', '075082', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users_registration_tbl`
--

CREATE TABLE `users_registration_tbl` (
  `userid` int(11) NOT NULL,
  `First_name` varchar(30) NOT NULL,
  `Last_name` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `profile_pic` varchar(30) NOT NULL,
  `Place` varchar(50) NOT NULL,
  `D_id` int(10) NOT NULL,
  `Mobile` varchar(20) NOT NULL,
  `org_id` int(20) NOT NULL,
  `Status` int(10) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_registration_tbl`
--

INSERT INTO `users_registration_tbl` (`userid`, `First_name`, `Last_name`, `Email`, `profile_pic`, `Place`, `D_id`, `Mobile`, `org_id`, `Status`) VALUES
(1, '', '', 'rivervally@gmail.com', '../upload/110-1600.jpg', 'kumarakom', 5, '9874563214', 4, 1),
(3, 'Rahul', 'aravind', 'rahul@gmail.com', 'upload/110-1600.jpg', 'kanjirappally', 0, '9878548512', 0, 1),
(4, 'admin', 'admin', 'admin@gmail.com', '../upload/741144_3279969139831', 'kuttipuram', 11, '895322154', 0, 1),
(6, 'dani', 'kurian', 'sudhimonthanuvelil@gmail.com', '../upload/9kIsOOf.jpg', 'mundakayam', 5, '9874562532', 0, 0),
(7, 'malu', 'mohan', 'malu@gmail.com', '../upload/9kIsOOf.jpg', 'bhgdh', 9, '9874236100', 0, 0),
(8, '', '', '', '../upload/', '', 0, '', 0, 0);

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
-- Indexes for table `addplace_tbl`
--
ALTER TABLE `addplace_tbl`
  ADD PRIMARY KEY (`pid`);

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
-- Indexes for table `otp`
--
ALTER TABLE `otp`
  ADD PRIMARY KEY (`oid`);

--
-- Indexes for table `users_registration_tbl`
--
ALTER TABLE `users_registration_tbl`
  ADD PRIMARY KEY (`userid`),
  ADD UNIQUE KEY `userid` (`userid`);

--
-- Indexes for table `usertype_tbl`
--
ALTER TABLE `usertype_tbl`
  ADD PRIMARY KEY (`usertypeid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addplace_tbl`
--
ALTER TABLE `addplace_tbl`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `district`
--
ALTER TABLE `district`
  MODIFY `D_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `login_tbl`
--
ALTER TABLE `login_tbl`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `org_tbl`
--
ALTER TABLE `org_tbl`
  MODIFY `org_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `otp`
--
ALTER TABLE `otp`
  MODIFY `oid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `usertype_tbl`
--
ALTER TABLE `usertype_tbl`
  MODIFY `usertypeid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `users_registration_tbl`
--
ALTER TABLE `users_registration_tbl`
  ADD CONSTRAINT `users_registration_tbl_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `login_tbl` (`userid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
