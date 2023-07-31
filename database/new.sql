-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 30, 2023 at 10:17 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blood_bank_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `bloodgroup`
--

CREATE TABLE `bloodgroup` (
  `blood_grp_id` int(11) NOT NULL,
  `Blood_id` int(11) NOT NULL,
  `bloodGroup` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bloodgroup`
--

INSERT INTO `bloodgroup` (`blood_grp_id`, `Blood_id`, `bloodGroup`) VALUES
(17, 16, 'A+'),
(18, 3, 'B-');

-- --------------------------------------------------------

--
-- Table structure for table `bloodrequest`
--

CREATE TABLE `bloodrequest` (
  `id` int(11) NOT NULL,
  `patientname` varchar(100) NOT NULL,
  `bloodgroup` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `unitofblood` varchar(100) NOT NULL,
  `hospitalNameAddress` varchar(500) NOT NULL,
  `city` varchar(100) NOT NULL,
  `requiredate` date NOT NULL,
  `contactname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `reasonforblood` varchar(1000) NOT NULL,
  `current_date_time` varchar(50) NOT NULL,
  `status` varchar(100) NOT NULL,
  `completeDate` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bloodrequest`
--

INSERT INTO `bloodrequest` (`id`, `patientname`, `bloodgroup`, `gender`, `unitofblood`, `hospitalNameAddress`, `city`, `requiredate`, `contactname`, `email`, `phone`, `reasonforblood`, `current_date_time`, `status`, `completeDate`) VALUES
(1, 'abc', 'A+', 'Female', '1', 'hello', 'ktm', '0001-11-11', '9882522', 'abcgamming123@gmail.com', '956666666666666', 'ac', '2023/07/27-18:14', 'Completed', '0022-02-22'),
(2, 'abc', 'A-', 'Male', '1', 'sdflk', 'ktm', '0001-11-11', '9882522', 'abcgamming123@gmail.com', '9999999999', 'ac', '2023/07/27-18:27', 'Pending', ''),
(3, 'sdfsa', '3', 'Female', '1', 'sdfs', 'sdf', '0000-00-00', 'asd', 'aa@gha.com', '1111', 'sdf', '2023/07/30-06:56', 'Pending', ''),
(4, 'sdfsa', '1', 'Male', '1', 'm', 'sdf', '0000-00-00', 'asd', 'asda@asd.com', '1111', 'sdf', '2023/07/30-06:57', 'Pending', ''),
(5, 'sdfsa', '3', 'Female', '1', 'sda', 'sdf', '0000-00-00', 'asd', 'aa@gha.com', '1111111', 'sdf', '2023/07/30-07:00', 'Pending', ''),
(6, '11', '1', 'Male', '1', 'sadc', 'sdf', '2023-08-04', 'asd', 'sth@sth.com', '9765789765', 'sdf', '2023/07/30-09:13', 'Pending', ''),
(7, 'asdxas', '17', 'Male', '-1', 'fdgvd', 'asd', '2023-07-19', 'asda', 'sth@sth.com', '1111111111', 'dasda', '2023/07/30-09:36', 'Pending', '');

-- --------------------------------------------------------

--
-- Table structure for table `donors`
--

CREATE TABLE `donors` (
  `id` int(11) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `bloodgroup` varchar(100) NOT NULL,
  `address` varchar(250) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` int(20) NOT NULL,
  `birthdate` date NOT NULL,
  `newdonor` varchar(100) NOT NULL,
  `ihaveread` varchar(100) NOT NULL,
  `iagree` varchar(100) NOT NULL,
  `donorRegisterDate` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `Blood_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `donors`
--

INSERT INTO `donors` (`id`, `fullname`, `gender`, `bloodgroup`, `address`, `email`, `phone`, `birthdate`, `newdonor`, `ihaveread`, `iagree`, `donorRegisterDate`, `status`, `Blood_id`) VALUES
(1, 'abcd donor', 'Female', 'A+', 'nyabazar', 'abcgamming123@gmail.com', 2147483647, '0000-00-00', 'Yes', 'on', 'on', '2023/07/27-18:20', 'Pending', 0),
(2, 'hello', 'Female', 'B+', 'as', 'aa@gha.com', 1111111, '0000-00-00', 'No', 'on', 'on', '2023/07/28-17:44', 'Pending', 0),
(3, 'asa', 'Other', 'A+', 'ads', 'aa@gha.com', 1111111, '0000-00-00', 'Yes', 'on', 'on', '2023/07/30-06:39', 'Pending', 0),
(4, 'hello', 'Female', 'O+', 'asdca', 'biplapneupane7@gmail.com', 1111111, '0022-02-22', 'Yes', 'on', 'on', '2023/07/30-07:01', 'Pending', 0),
(5, 'hello', 'Female', 'AB+', 'ad', 'abgamming123@gmail.com', 1111111, '3333-03-31', 'Yes', 'on', 'on', '2023/07/30-07:02', 'Pending', 0),
(6, 'hello', 'Female', 'B+', 'nn', 'abcgamming123@gmail.com', 1111111, '2023-07-18', 'Yes', 'on', 'on', '2023/07/30-07:05', 'Pending', 0),
(7, 'hellosc', 'Male', 'AB-', 'sdcd', 'abcgamming123@gmail.com', 1111111, '0000-00-00', 'Yes', 'on', 'on', '2023/07/30-07:06', 'Pending', 0),
(8, 'ASDXAS', 'Other', 'AB+', 'ash', 'abcgamming123@gmail.com', 1111111, '2023-07-27', 'Yes', 'on', 'on', '2023/07/30-07:08', 'Pending', 0),
(9, 'hellosc', 'Female', 'B+', 'asda', 'abcgamming123@gmail.com', 1111111, '2023-07-26', 'Yes', 'on', 'on', '2023/07/30-07:10', 'Pending', 0),
(10, 'asd', 'Male', 'A-', 'sdf', 'abcgamming123@gmail.com', 1111111, '0000-00-00', 'Yes', 'on', 'on', '2023/07/30-07:40', 'Pending', 0),
(11, 'ram', 'Female', 'B-', 'check', 'sth@sth.com', 986363765, '2023-07-18', 'Yes', 'on', 'on', '2023/07/30-08:49', 'Pending', 0),
(12, 'sfdmlk', 'Female', 'AB+', 'fdssd', 'sth@sth.com', 887789, '2023-07-28', 'Yes', 'on', 'on', '2023/07/30-08:57', 'Pending', 0),
(13, 'hello', 'Male', 'B+', 'sdfcsa', 'abcgamming123@gmail.com', 2147483647, '1111-11-11', 'Yes', 'on', 'on', '2023/07/30-09:08', 'Pending', 0),
(14, 'asd', 'Female', 'B+', 'asxaa', 'aa@gha.com', 1111111111, '0000-00-00', 'Yes', 'on', 'on', '2023/07/30-09:23', 'Pending', 0),
(15, 'hello', 'Male', 'B+', 'asd', 'aa@gha.com', 2147483647, '2023-07-02', 'Yes', 'on', 'on', '2023/07/30-09:25', 'Pending', 0),
(16, 'asd', 'Other', 'A+', 'as', 'asda@asd.com', 2147483647, '2023-07-25', 'Yes', 'on', 'on', '2023/07/30-09:27', 'Pending', 0),
(17, 'qqq', 'Male', 'B-', 'asdad', 'abcgamming123@gmail.com', 2147483647, '2005-07-14', 'Yes', 'on', 'on', '2023/07/30-09:45', 'Pending', 0);

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(255) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `phone` int(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` longtext NOT NULL,
  `messageDateTime` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone` int(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `signUpDate` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `code` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `name`, `phone`, `email`, `username`, `password`, `signUpDate`, `status`, `code`) VALUES
(1, 'Super', 2147483647, 'abcgamming123@gmail.com', 'admin', 'Admin1234@', '2023/07/26-20:56', 'Active', 678065),
(2, 'sita', 2147483647, 'wildkingdev@gmail.com', 'dev', 'AsdkjfjksdfsQQQ@@@11', '2023/07/28-07:01', 'Active', 0),
(3, 'sita', 2147483647, 'sitashrestha1883@gmail.com', 'sitakumari', 'AschjbsjWW@@@11', '2023/07/28-07:08', 'Pending', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bloodgroup`
--
ALTER TABLE `bloodgroup`
  ADD PRIMARY KEY (`blood_grp_id`),
  ADD KEY `fk` (`Blood_id`);

--
-- Indexes for table `bloodrequest`
--
ALTER TABLE `bloodrequest`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donors`
--
ALTER TABLE `donors`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk` (`Blood_id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username_2` (`username`),
  ADD UNIQUE KEY `email_2` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bloodgroup`
--
ALTER TABLE `bloodgroup`
  MODIFY `blood_grp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `bloodrequest`
--
ALTER TABLE `bloodrequest`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `donors`
--
ALTER TABLE `donors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bloodgroup`
--
ALTER TABLE `bloodgroup`
  ADD CONSTRAINT `bloodgroup_ibfk_1` FOREIGN KEY (`Blood_id`) REFERENCES `donors` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
