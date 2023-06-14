-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2023 at 02:15 PM
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
-- Table structure for table `donors`
--

CREATE TABLE `donors` (
  `id` int(11) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `fathername` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `bloodgroup` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `wardno` int(100) NOT NULL,
  `address` varchar(250) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone1` int(20) NOT NULL,
  `phone2` int(20) NOT NULL,
  `birthdate` date NOT NULL,
  `newdonor` varchar(100) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `ihaveread` varchar(100) NOT NULL,
  `iagree` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `donors`
--

INSERT INTO `donors` (`id`, `fullname`, `fathername`, `gender`, `bloodgroup`, `country`, `city`, `state`, `wardno`, `address`, `email`, `phone1`, `phone2`, `birthdate`, `newdonor`, `photo`, `ihaveread`, `iagree`, `status`) VALUES
(11, 'asas', 'asas', 'Female', 'B+', 'Armenia', 'asda', 'asda', 1, 'asda', 'a@a.com', 0, 0, '2023-06-23', 'No', '', 'on', 'on', 'Active'),
(12, 'sdn', 'bsdba', 'Male', 'A-', 'Armenia', 'asda', 'asda', 1, 'asda', 'asd@d.com', 0, 0, '2023-06-29', 'Yes', '0-02-03-cc49a439af96030f1e8543da94952fb248455fb9946c2dd0013754ae43e6633b_4dedfc4a216a1aec.jpg', 'on', 'on', 'Active'),
(13, 'ASA', 'asxa', 'Female', 'A+', 'Russia', 'qqs', 'ASXA', 1, '11', 'asd@fs.com', 0, 0, '2023-07-01', 'Yes', '0-02-03-cf499206d80b5047f6364fc66df9b6787804cea5b48842899c292c92815408f4_c63e0dfea34e827a.jpg', 'on', 'on', 'Pending'),
(14, 'Raj shah', 'Raju shah', 'Male', 'AB-', 'Nepal', 'Kathmandu', 'Ktm', 8, 'Hdddhehejejeheheh', 'shdhshsish@gmail.com', 2147483647, 46444646, '2023-06-12', 'Yes', '', 'on', 'on', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `massage`
--

CREATE TABLE `massage` (
  `id` int(255) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `phone` int(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `massage` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `massage`
--

INSERT INTO `massage` (`id`, `fullname`, `phone`, `email`, `massage`) VALUES
(1, 'Biplap', 984343, 'aa@ss.com', 'Shhshhsbsbs'),
(2, 'neupane', 2147483647, 'a@a.com', 'hello this is testing\r\n'),
(3, 'hello', 2147483647, 'a.con@shd.com', 'hello sathi'),
(4, 'Biplap', 2147483647, 'a.con@shd.com', 'ashda'),
(5, 'hello', 2147483647, 's@a.com', 'check 1\r\n'),
(7, 'asassa', 2147483647, 'a@as.com', 'a');

-- --------------------------------------------------------

--
-- Table structure for table `needblood`
--

CREATE TABLE `needblood` (
  `id` int(11) NOT NULL,
  `patientname` varchar(100) NOT NULL,
  `bloodgroup` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `unitofblood` varchar(100) NOT NULL,
  `hospitalNameAddress` varchar(500) NOT NULL,
  `country` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `doctorname` varchar(100) NOT NULL,
  `requiredate` date NOT NULL,
  `contactname` varchar(100) NOT NULL,
  `needbloodaddress` varchar(1000) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone1` varchar(20) NOT NULL,
  `phone2` varchar(20) NOT NULL,
  `birthdate` date NOT NULL,
  `reasonforblood` varchar(1000) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `completeDate` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `needblood`
--

INSERT INTO `needblood` (`id`, `patientname`, `bloodgroup`, `gender`, `unitofblood`, `hospitalNameAddress`, `country`, `city`, `doctorname`, `requiredate`, `contactname`, `needbloodaddress`, `email`, `phone1`, `phone2`, `birthdate`, `reasonforblood`, `photo`, `status`, `completeDate`) VALUES
(1, 'hell', 'A+', 'Male', '1 gallon', '', 'Armenia', 'ktm', 'haribadhdur', '2023-06-12', 'hariprasd', 'nayabazar', 's@a.com', '12222222', '[1111111111111111111', '2023-06-22', 'asaddas', '', 'Not Completed', '2023-06-14'),
(2, 'sas', 'B+', 'Male', '11111', '', 'Nepal', 'as', 'haribadhdur', '2023-06-02', 'qw', 'qwq', 's@a.com', 'qw', '[qw', '2023-06-17', 'qwq', '', 'notcompleted', '2023-06-30'),
(3, 'sadsa', 'A-', 'Male', 'as', 'asddada', 'Germany', 'adsd', 'asda', '2023-06-29', 'asdadad', 'ad', 'a@a.com', '988', '[asda', '2023-07-08', 'asda', '', 'notcompleted', '2023-06-30'),
(4, 'asxa', 'A+', 'Male', 'asas', 'awdxas', 'Russia', 'asdxa', 'asd', '2023-06-23', 'asdaasa', 'asd', 'asd@fs.com', 'asdad', '[asda', '2023-06-24', 'asda', '', 'notcompleted', '2023-06-30'),
(5, 'sah', 'A+', 'Female', 'asa', 'asda', 'Russia', 'asd', 'asd', '2023-06-20', 'asda', 'sada', 'asda@fdsf.com', 'asda', 'asda', '2023-06-08', 'dsa', '', 'Pending', '2023-06-28'),
(6, 'hjb', 'B+', 'Male', 'asxaasd', 'saxa', 'Armenia', 'asaa', 'asx', '2023-06-08', 'asas', 'asasd', 'asd@fs.com', 'asd', 'asd', '2023-06-29', 'asda', '0-02-03-cf499206d80b5047f6364fc66df9b6787804cea5b48842899c292c92815408f4_c63e0dfea34e827a.jpg', 'Not Completed', '2023-06-30');

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
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `name`, `phone`, `email`, `username`, `password`, `status`) VALUES
(1, 'Biplap Neupane', 980000000, 'biplap@gmail.com', 'biplap', 'biplap', 'Active'),
(2, 'admin', 980000000, 'a@a.com', 'admin', 'admin', 'Active'),
(3, 'aa', 0, 'a@a.com', 'ass', 'sassa', 'Active'),
(4, 'abc', 988888888, 'aa@zsh.com', 'abcd', 'abcd', 'Active'),
(5, 'bb', 2147483647, 'aa@s.com', 'aa', 'aa', 'pending');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `donors`
--
ALTER TABLE `donors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `massage`
--
ALTER TABLE `massage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `needblood`
--
ALTER TABLE `needblood`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `donors`
--
ALTER TABLE `donors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `massage`
--
ALTER TABLE `massage`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `needblood`
--
ALTER TABLE `needblood`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
