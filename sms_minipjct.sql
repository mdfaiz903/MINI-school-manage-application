-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 18, 2019 at 06:25 PM
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sms_minipjct`
--

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `roll` int(6) NOT NULL,
  `class` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `parents_contac` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `roll`, `class`, `city`, `parents_contac`, `photo`, `datetime`) VALUES
(2, 'mamun44', 444444, '5th', 'nokahali', '01834568912', '5d4e0f70afd3c.jpg', '0000-00-00 00:00:00'),
(3, 'marup khan', 111111, '1st', 'nokahali', '01532145789', '5d4e102c10170.jpg', '0000-00-00 00:00:00'),
(4, 'simu123', 121212, '1st', 'mirpur', '01532145789', 'simu1235d4e12c6bb055.png', '0000-00-00 00:00:00'),
(5, 'mamun1223', 525252, '3rd', 'Dhaka', '01531245789', 'mamun12235d4e411f12775.png', '2019-08-10 03:59:27'),
(8, 'kabir', 555555, '4th', 'ctg', '01524578965', 'kabir5d4e2ddaed6f8.png', '2019-08-10 02:37:14'),
(9, 'munira', 521462, '2nd', 'nokahali', '01732457895', 'munira5d4edf0dd96f4.png', '2019-08-10 15:13:17');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `username`, `password`, `photo`, `status`, `datetime`) VALUES
(25, 'salman11', 'salman11@gmail.com', 'salman11', '123', 'salman111565455266.png', '0', '2019-08-10 16:41:06'),
(26, 'fayez mohammad ', 'bishobabubrand@gmail.com', 'fayez', '123', 'fayez1565455458.JPG', '0', '2019-08-10 16:44:18'),
(27, '', '', '', '', '1565455805.JPG', '0', '2019-08-10 16:50:05'),
(28, 'mamun', 'bishobabubrand11@gmail.com', 'mamun22', '123', 'mamun221565456234.JPG', '0', '2019-08-10 16:57:14'),
(42, 'fayez mohammad ', 'bishobabubrand33@gmail.com', 'mamun33', '22', '5d4eff23633621565458211IMG_1488.JPG', '0', '2019-08-10 17:30:11'),
(43, 'ferdous ali ', 'ferdousali@gmail.com', 'ferdousali', '123', '5d5712d1d47211565987537', '0', '2019-08-16 20:32:17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roll` (`roll`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
