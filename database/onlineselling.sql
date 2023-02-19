-- phpMyAdmin SQL Dump
-- version 5.2.1-dev+20220704.3975e7bb9d
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 05, 2022 at 05:06 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onlineselling`
--

-- --------------------------------------------------------

--
-- Table structure for table `col_login`
--

CREATE TABLE `col_login` (
  `cid` int(11) NOT NULL,
  `col_email` varchar(255) NOT NULL,
  `col_pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `col_login`
--

INSERT INTO `col_login` (`cid`, `col_email`, `col_pass`) VALUES
(1, 'ipscollege@gmail.com', '123654');

-- --------------------------------------------------------

--
-- Table structure for table `col_users`
--

CREATE TABLE `col_users` (
  `uid` int(11) NOT NULL,
  `urno` varchar(255) DEFAULT NULL,
  `uname` varchar(255) DEFAULT NULL,
  `uemail` varchar(255) DEFAULT NULL,
  `ucourse` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `col_users`
--

INSERT INTO `col_users` (`uid`, `urno`, `uname`, `uemail`, `ucourse`) VALUES
(5, '0928CS1910124', 'Farah khann', 'khanfarah2512@gmail.com', 'B.Tech'),
(6, '0928CS1910144', 'Priyank Agrawal', 'agrawalpriyank68@gmail.com', 'B.Tech'),
(8, '0928CS191058', 'Simran kushwah', 'simrankushwah31@gmail.com', 'B.Tech'),
(9, '0928CS191025', 'Dilshad Ahmed', 'dilshad@gmail.com', 'B.Tech'),
(10, '0928CS191026', 'Mohit yadav', 'dilshad@gmail.com', 'B.Tech');

-- --------------------------------------------------------

--
-- Table structure for table `otp_expire`
--

CREATE TABLE `otp_expire` (
  `user_email` varchar(255) NOT NULL,
  `otp` int(11) NOT NULL,
  `expire` int(11) NOT NULL,
  `dt` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `otp_expire`
--

INSERT INTO `otp_expire` (`user_email`, `otp`, `expire`, `dt`) VALUES
('agrawalpriyank68@gmail.com', 839074, 0, '2022-04-17 04:29:46');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `pid` int(11) NOT NULL,
  `pname` varchar(255) DEFAULT NULL,
  `pimage` varchar(255) DEFAULT NULL,
  `pprice` varchar(255) DEFAULT NULL,
  `pquantity` int(11) NOT NULL,
  `pcondition` varchar(255) DEFAULT NULL,
  `sname` varchar(255) DEFAULT NULL,
  `semail` varchar(255) DEFAULT NULL,
  `scontact` varchar(255) DEFAULT NULL,
  `pdes` varchar(255) DEFAULT NULL,
  `dt` varchar(255) DEFAULT NULL,
  `uid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`pid`, `pname`, `pimage`, `pprice`, `pquantity`, `pcondition`, `sname`, `semail`, `scontact`, `pdes`, `dt`, `uid`) VALUES
(2, 'laptop', 'laptop.jfif', '1000', 2, 'good working', 'Priyank Agrawal', 'agrawalpriyank68@gmail.com', '7047898064', 'very much good', '', 1),
(3, 'Mobile', 'download (1).jfif', '12000', 1, 'strong', 'Priyank Agrawal', 'agrawalpriyank68@gmail.com', '7047898064', 'very much good', '', 1),
(4, 'bike', 'bike.jfif', '15000', 3, 'good working', 'Farah Khan', 'mohitagawal76660@gmail.com', '7047898064', 'very much good', '', 3),
(5, 'shelf', 'shelf.jfif', '7450', 2, 'good working', 'Farah Khan', 'mohitagawal76660@gmail.com', '7047898064', 'very much good', '', 3),
(6, 'fan', 'fan.jfif', '2000', 2, 'good working', 'Simran Kushwah', 'priyankagrawal76660@gmail.com', '7047898064', 'very much good', '', 4),
(7, 'car', 'download.jfif', '12000', 3, 'good working', 'Simran Kushwah', 'priyankagrawal76660@gmail.com', '7047898064', 'very much good', '', 4),
(8, 'desk', 'desk.jfif', '5000', 2, 'good working', 'dilshad Ahmed', 'onlinecourse95@gmail.com', '7047898064', 'very much good', '', 5),
(9, 'bike', 'download.jfif', '12000', 1, 'good working', 'dilshad Ahmed', 'onlinecourse95@gmail.com', '7047898064', 'accha h', '', 5),
(10, 'fan', 'shelf.jfif', '100', 2, 'good working', 'Priyank Agrawal', 'agrawalpriyank68@gmail.com', '7047898064', 'very much good', '', 1),
(11, 'car1236', 'bike.jfif', '1000', 2, 'good working', 'Priyank Agrawal', 'agrawalpriyank68@gmail.com', '7047898064', 'accha h', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `sid` int(11) NOT NULL,
  `srno` varchar(255) NOT NULL,
  `sname` varchar(255) NOT NULL,
  `semail` varchar(255) NOT NULL,
  `spass` varchar(255) NOT NULL,
  `sphone` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`sid`, `srno`, `sname`, `semail`, `spass`, `sphone`) VALUES
(1, '0928CS1910144', 'Priyank Agrawal', 'agrawalpriyank68@gmail.com', '202cb962ac59075b964b07152d234b70', '7047898064'),
(3, '0928CS1910124', 'Farah Khan', 'mohitagawal76660@gmail.com', '202cb962ac59075b964b07152d234b70', '7047898064'),
(4, '0928CS191058', 'Simran Kushwah', 'priyankagrawal76660@gmail.com', '202cb962ac59075b964b07152d234b70', '7047898064'),
(5, '0928CS191025', 'dilshad Ahmed', 'onlinecourse95@gmail.com', '202cb962ac59075b964b07152d234b70', '7047898064'),
(6, '0928CS191026', 'Mohit Yadav', 'agrawalpriyank69@gmail.com', '202cb962ac59075b964b07152d234b70', '7047898064');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `col_login`
--
ALTER TABLE `col_login`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `col_users`
--
ALTER TABLE `col_users`
  ADD PRIMARY KEY (`uid`),
  ADD UNIQUE KEY `urno` (`urno`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`sid`),
  ADD UNIQUE KEY `srno` (`srno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `col_login`
--
ALTER TABLE `col_login`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `col_users`
--
ALTER TABLE `col_users`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
