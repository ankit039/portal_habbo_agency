-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 10, 2020 at 09:59 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portal_habbo_agency`
--

-- --------------------------------------------------------

--
-- Table structure for table `iptrack`
--

CREATE TABLE `iptrack` (
  `id` int(11) NOT NULL,
  `hname` varchar(30) DEFAULT NULL,
  `type` int(11) DEFAULT NULL,
  `ip` varchar(40) DEFAULT NULL,
  `reason` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `logindetail`
--

CREATE TABLE `logindetail` (
  `id` int(11) NOT NULL,
  `hname` varchar(30) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL,
  `status` varchar(30) DEFAULT NULL,
  `updatedby` varchar(20) DEFAULT NULL,
  `updatedate` varchar(20) DEFAULT NULL,
  `rank_code` int(11) DEFAULT NULL,
  `ip` varchar(30) DEFAULT NULL,
  `signupdate` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `logindetail`
--

INSERT INTO `logindetail` (`id`, `hname`, `email`, `password`, `status`, `updatedby`, `updatedate`, `rank_code`, `ip`, `signupdate`) VALUES
(1, 'tilhanda', 'thilhanda@gmail.com', 'tornado909', 'Verified', 'ADMIN', '09-02-2020 08:07pm', 13, '::1', '09-02-2020 08:07pm');

-- --------------------------------------------------------

--
-- Table structure for table `profiledetail`
--

CREATE TABLE `profiledetail` (
  `id` int(11) NOT NULL,
  `hname` varchar(30) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `profiledetail`
--

INSERT INTO `profiledetail` (`id`, `hname`, `email`) VALUES
(1, 'tilhanda', 'thilhanda@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `rankactivity`
--

CREATE TABLE `rankactivity` (
  `id` int(11) NOT NULL,
  `hname` varchar(30) DEFAULT NULL,
  `oldrank` varchar(30) DEFAULT NULL,
  `newrank` varchar(30) DEFAULT NULL,
  `updatedby` varchar(30) DEFAULT NULL,
  `updatedate` varchar(30) DEFAULT NULL,
  `type` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `iptrack`
--
ALTER TABLE `iptrack`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logindetail`
--
ALTER TABLE `logindetail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profiledetail`
--
ALTER TABLE `profiledetail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rankactivity`
--
ALTER TABLE `rankactivity`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `iptrack`
--
ALTER TABLE `iptrack`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `logindetail`
--
ALTER TABLE `logindetail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `profiledetail`
--
ALTER TABLE `profiledetail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `rankactivity`
--
ALTER TABLE `rankactivity`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
