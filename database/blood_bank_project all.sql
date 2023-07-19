-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 19, 2023 at 10:25 PM
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
(1, 'test name donor', 'test father name', 'Male', 'A+', 'Nepal', 'kathmandu ', 'Bagmati State', 8, 'nayabzar 16 ktm\r\n', 'test@test.com', 98000000, 981111111, '2016-06-08', 'No', '0-02-03-72617c718d64f82900baf92f5b4cbfdb9f9527d3d2446850abac864b84edf0a4_caac4e5e2159072.jpg', 'on', 'on', 'Active'),
(2, 'hello test', 'test f', 'Male', 'A+', 'Nepal', 'kathmandu', 'Bagmati State', 1, 'nayabazar', 'te@gas.com', 98555555, 2147483647, '2023-06-04', 'No', '0-02-03-60de3c75926ca989e14bb9f90af71eaff7df590bd21d935503766bcff63fee38_f008bab7b80908be.jpg', 'on', 'on', 'Active'),
(3, 'biplap neupane', 'sadhka', 'Male', 'AB', 'Nepal', 'kathmandu', 'Koshi State', 1, 'sdf', 'Aasb@dfsh.com', 1112222222, 1222222222, '2023-07-06', 'No', '0-02-03-b3ce900258969941c3ecc70e5190e5f7b1bd178e894c05dbe7d812a836ad7c1b_1e629a112e078637.jpg', 'on', 'on', 'Active');

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

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `fullname`, `phone`, `email`, `message`, `messageDateTime`) VALUES
(1, 'biplap neupane', 2147483647, 'abcgamming123@gmail.com', 'ahkjaa', ''),
(4, 'biplap', 2147483647, 'admin@aksd.com', 'hello test', ''),
(5, 'Bipalp', 2147483647, 'bbas@ads.com', 'shdhas', ''),
(6, 'biplap', 2147483647, 'biplap@gmail.com', 'test test date\r\n', '2023/07/19-20:34'),
(7, 'AKASD', 2147483647, 'A@f.COM', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ratione quas ullam rem velit distinctio assumenda hic debitis nostrum at iusto deleniti ducimus iure eaque ab, aliquam labore possimus magnam dolores! Lorem ipsum dolor, sit amet consectetur adipisicing elit. Beatae aut ullam quis unde, magni quam iure molestias, tempore quo accusamus, sint quod dolor perferendis vitae autem sit officia adipisci voluptates!', '2023/07/19-21:05');

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
  `current_date_time` varchar(50) NOT NULL,
  `status` varchar(100) NOT NULL,
  `completeDate` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `needblood`
--

INSERT INTO `needblood` (`id`, `patientname`, `bloodgroup`, `gender`, `unitofblood`, `hospitalNameAddress`, `country`, `city`, `doctorname`, `requiredate`, `contactname`, `needbloodaddress`, `email`, `phone1`, `phone2`, `birthdate`, `reasonforblood`, `photo`, `current_date_time`, `status`, `completeDate`) VALUES
(1, 'test patient', 'A+', 'Male', '2 pouch', 'nayabazar', 'Nepal', 'kathmandu ', 'test doctor', '2023-06-20', 'test contact name', 'pokhara \r\n\r\n', 'test@test.com', '98000000', '981111111', '2023-06-20', 'cold care', '0-02-03-b9e017cc700f97e0b281a0f43131908ec80e39dfebd27c78c2e528a12b83ea65_e3469172fa9ebfad.jpg', '', 'Not Completed', '2023-06-20'),
(2, 'ab', 'A+', 'Female', '1 pouch', 'abc hospital\r\n', 'Nepal', 'kathmandu', 'abc doctor', '2023-06-07', 'bip', 'nayabazar ktm\r\n', 'te@gas.com', '98555555', '9855555555', '2023-06-28', 'fever\r\n', '0-02-03-72617c718d64f82900baf92f5b4cbfdb9f9527d3d2446850abac864b84edf0a4_caac4e5e2159072.jpg', '', 'Pending', '2023-07-18'),
(3, 'a', 'A-', 'Female', '1', 'asd', 'Nepal', 'asda', 'asd', '2023-07-28', 'asd', 'asd', 's@gmail.com', '12', '212', '2023-07-05', 'saxad', '0-02-03-b3ce900258969941c3ecc70e5190e5f7b1bd178e894c05dbe7d812a836ad7c1b_1e629a112e078637.jpg', '2023-07-08 18:24', 'Pending', '2023-07-08'),
(4, 'asdxad', 'O-', 'Male', '1', 'asd', 'Nepal', 'asd', 'asd', '2023-07-04', 'asdas', 'adsa', 's@gmail.com', '122222222', '1213333333', '2023-07-06', 'asas', '0-02-03-60de3c75926ca989e14bb9f90af71eaff7df590bd21d935503766bcff63fee38_f008bab7b80908be.jpg', '2023/07/08-19:12', 'Pending', ''),
(5, 'raa', 'A+', 'Male', '1', 'as', 'Nepal', 'ktm', 'dr.ha', '2023-07-16', 'asd', 'asd', 'asd@sdf.com', '1221', '112', '2023-07-20', 'AS', '0-02-03-64ccee6d0362a73e3235bd536b3bda54d72a3e4dbd8d49f865d6fee4ecbe5fc9_d93b684cdea26e8b.jpg', '2023/07/16-15:43', 'Not Completed', '2023-07-18'),
(6, 'abc', 'A-', 'Female', '2', 'abc hospital', 'Nepal', 'ktm', 'dr.hari', '2023-07-18', 'asd', 'naya', 'asd@sdf.com', '1221', '112', '2023-07-18', 'cancer\r\n', '0-02-03-24bce2551313d1880e39b586db62e48fb81ae275e735140f828c49fd27f53767_d82aafef44a6eb20.jpg', '2023/07/17-05:19', 'Completed', '2023-07-18');

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
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `name`, `phone`, `email`, `username`, `password`, `signUpDate`, `status`) VALUES
(1, 'Super Admin', 2147483647, 'admin@admin.com', 'admin', 'Nepal@1234', '', 'Active'),
(2, 'test1', 2147483647, 'test@test.com', 'test', 'Test321@', '', 'Active'),
(3, 'sita', 2147483647, 'admin@aksd.com', 'sita', 'Sita123@', '', 'Active'),
(14, 'Bip', 2147483647, 'biplap@gmail.com', 'biplap', 'Biplap@123', '', 'Pending'),
(17, 'asaas', 2147483647, 'ga@gas.com', 'aa', 'AsdasQ1@sdsd', '', 'Pending'),
(18, 'Biplap', 2147483647, 'biplap@gmail.com', 'biplap1', 'AS!!!!WWWww@asda11', '', 'Pending'),
(19, 'abc', 2147483647, 'asahsa@ga.com', 'abcss', 'Aasdahsdashdj@122@', '', 'Pending'),
(20, 'aasjdnabs', 2147483647, 'asahsa@ga.com', 'biplap122', 'Assdhsadbhhb222!!22', '', 'Deactive'),
(21, 'Biplap New', 2147483647, 'biplap@gmail.com', 'Biplap12', 'Biplap321@', '2023/07/19-20:14', 'Active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `donors`
--
ALTER TABLE `donors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
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
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `donors`
--
ALTER TABLE `donors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
