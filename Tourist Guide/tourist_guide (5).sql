-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2019 at 11:47 AM
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
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(11) NOT NULL,
  `user_type` int(11) NOT NULL,
  `lat` varchar(50) NOT NULL,
  `log` varchar(50) NOT NULL,
  `mp` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addplace_tbl`
--

INSERT INTO `addplace_tbl` (`pid`, `place_name`, `discription`, `image`, `D_id`, `contact`, `date`, `status`, `user_type`, `lat`, `log`, `mp`) VALUES
(2, 'kumarakom', 'Beauty of kottayam', '../upload/hd_wallpaper_5574.jpg', 5, '9632587410', '2019-05-01 16:09:16', 0, 0, '', '', ''),
(3, 'alappuzha', 'Alappuzha (or Alleppey) is a city on the Laccadive Sea in the southern Indian state of Kerala. ', '../upload/hd_wallpaper_6111.jpg', 4, '9856321470', '2019-05-01 16:20:03', 0, 0, '', '', ''),
(4, 'vagamon', 'misty climate', '../upload/0.jpg', 5, '9632587410', '2019-05-03 04:35:15', 1, 0, '', '', ''),
(5, 'illickalkallu', 'most beauty of kottayam', '../upload/0.jpg', 5, '9632587410', '2019-05-03 04:42:15', 1, 0, '', '', ''),
(6, 'abcv', 'ghgyg', '../upload/06a50172a29087b0f874e87cd2a6ce2e.jpg', 1, '9766564432', '2019-05-03 07:12:21', 0, 0, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `booking_tbl`
--

CREATE TABLE `booking_tbl` (
  `book_id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `fid` int(11) NOT NULL,
  `placename` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `n_o_t` varchar(10) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
-- Table structure for table `features_tbl`
--

CREATE TABLE `features_tbl` (
  `fid` int(11) NOT NULL,
  `type` varchar(50) NOT NULL,
  `n_o_t` varchar(20) NOT NULL,
  `amount` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `features_tbl`
--

INSERT INTO `features_tbl` (`fid`, `type`, `n_o_t`, `amount`) VALUES
(1, 'hdgdthd', '5', '7576'),
(2, 'thfghgfhf', '10', '200'),
(3, 'gdgdgde', '200', '120'),
(4, 'gdgdgde', '200', '120'),
(5, 'gdgdgde', '200', '120'),
(6, 'gdgdgde', '200', '120'),
(7, 'gdgdgde', '200', '120'),
(8, 'gdgdgde', '200', '120'),
(9, 'ssfdfsf', '200', '200'),
(10, 'gggh', '89', '900');

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
(3, 'rivervally@gmail.com', 'efc5b7b24faeadd8bf0d4db18dd0ab02', '2', '1'),
(13, 'admin@gmail.com', '0e7517141fb53f21ee439b355b5a1d0a', '1', '1'),
(14, 'nandhu@gmail.com', '2055f2a45bea193addcc4b44ce83e396', '3', '1');

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
(1, 'rivervally', 'hotel', 'Ac and non Ac', 'kl/05/123456'),
(2, 'elegent', 'hotel', 'ac rooms with ac restaurents', 'kl/10/45655');

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
(10, 'sudhimonthanuvelil@gmail.com', '149399', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users_registration_tbl`
--

CREATE TABLE `users_registration_tbl` (
  `userid` int(11) NOT NULL,
  `First_name` varchar(30) NOT NULL,
  `Last_name` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `profile_pic` varchar(50) NOT NULL,
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
(3, '', '', 'rivervally@gmail.com', '../upload/530-3.jpg', 'kanjirappaly', 5, '9874563210', 1, 1),
(13, 'admin', 'admin', 'admin@gmail.com', '../upload/-1466341263.jpg', 'mundakkayam', 5, '9632587410', -1, 0),
(14, 'nandhu', 'aravind', 'nandhu@gmail.com', '../upload/9kIsOOf.jpg', 'vemabandu', 4, '8965741230', 0, 0);

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
-- Indexes for table `booking_tbl`
--
ALTER TABLE `booking_tbl`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `district`
--
ALTER TABLE `district`
  ADD PRIMARY KEY (`D_id`);

--
-- Indexes for table `features_tbl`
--
ALTER TABLE `features_tbl`
  ADD PRIMARY KEY (`fid`);

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
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `booking_tbl`
--
ALTER TABLE `booking_tbl`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `district`
--
ALTER TABLE `district`
  MODIFY `D_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `features_tbl`
--
ALTER TABLE `features_tbl`
  MODIFY `fid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `login_tbl`
--
ALTER TABLE `login_tbl`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `org_tbl`
--
ALTER TABLE `org_tbl`
  MODIFY `org_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `otp`
--
ALTER TABLE `otp`
  MODIFY `oid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

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
