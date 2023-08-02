-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 02, 2023 at 02:41 PM
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
  `bloodGroup` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bloodgroup`
--

INSERT INTO `bloodgroup` (`blood_grp_id`, `bloodGroup`) VALUES
(1, 'A'),
(2, 'A+'),
(4, 'AB+');

-- --------------------------------------------------------

--
-- Table structure for table `bloodrequest`
--

CREATE TABLE `bloodrequest` (
  `id` int(11) NOT NULL,
  `patientname` varchar(100) NOT NULL,
  `bloodgroup` int(11) NOT NULL,
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
(1, 'sdfj', 1, 'Male', '1s', 'dfds', 'd', '2023-08-18', 'sdas', 'biplapneupane77@gmail.com', '9855555555', 'asdaas', '2023/08/02-09:14', 'Pending', ''),
(2, 'sdfj', 1, 'Female', '1sa', 'asda', 'd', '2023-08-23', 'sdas', 'biplapneupane77@gmail.com', '9855555555', 'ads', '2023/08/02-09:16', 'Pending', ''),
(3, 'asxaasdas', 1, 'Male', 'ad', 'ada', 'ada', '2023-09-01', 'adsa', 'biplapneupane77@gmail.com', '9855555555', 'ad', '2023/08/02-09:31', 'Pending', '');

-- --------------------------------------------------------

--
-- Table structure for table `donors`
--

CREATE TABLE `donors` (
  `id` int(11) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `bloodgroup` int(11) NOT NULL,
  `address` varchar(250) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` int(20) NOT NULL,
  `birthdate` date NOT NULL,
  `newdonor` varchar(100) NOT NULL,
  `ihaveread` varchar(100) NOT NULL,
  `iagree` varchar(100) NOT NULL,
  `donorRegisterDate` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `donors`
--

INSERT INTO `donors` (`id`, `fullname`, `gender`, `bloodgroup`, `address`, `email`, `phone`, `birthdate`, `newdonor`, `ihaveread`, `iagree`, `donorRegisterDate`, `status`) VALUES
(19, 'asd', 'male', 2, 'asd', 'biplap@neupane.com', 1111111111, '2023-08-08', 'asd', 'ad', 'ads', 'da', 'ad'),
(21, 'Ram', 'Male', 1, 'asda', 'biplapneupane77@gmail.com', 2147483647, '1111-01-11', '', 'on', 'on', '2023/08/02-09:48', 'Pending');

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
(1, 'Super', 2147483647, 'abcgamming123@gmail.com', 'admin', 'Admin123@', '2023/07/26-20:56', 'Active', 678065),
(2, 'sita', 2147483647, 'wildkingdev@gmail.com', 'dev', 'AsdkjfjksdfsQQQ@@@11', '2023/07/28-07:01', 'Active', 0),
(3, 'sita', 2147483647, 'sitashrestha1883@gmail.com', 'sitakumari', 'AschjbsjWW@@@11', '2023/07/28-07:08', 'Pending', 0),
(4, 'test', 2147483647, 'biplapneupane77@gmail.com', 'test', 'Admin123@', '2023/08/02-08:04', 'Active', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bloodgroup`
--
ALTER TABLE `bloodgroup`
  ADD PRIMARY KEY (`blood_grp_id`),
  ADD UNIQUE KEY `bloodGroup` (`bloodGroup`);

--
-- Indexes for table `bloodrequest`
--
ALTER TABLE `bloodrequest`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bloodgroup` (`bloodgroup`);

--
-- Indexes for table `donors`
--
ALTER TABLE `donors`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk` (`bloodgroup`);

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
  MODIFY `blood_grp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `bloodrequest`
--
ALTER TABLE `bloodrequest`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `donors`
--
ALTER TABLE `donors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bloodrequest`
--
ALTER TABLE `bloodrequest`
  ADD CONSTRAINT `bloodrequest_ibfk_1` FOREIGN KEY (`bloodgroup`) REFERENCES `bloodgroup` (`blood_grp_id`);

--
-- Constraints for table `donors`
--
ALTER TABLE `donors`
  ADD CONSTRAINT `donors_ibfk_1` FOREIGN KEY (`bloodgroup`) REFERENCES `bloodgroup` (`blood_grp_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
