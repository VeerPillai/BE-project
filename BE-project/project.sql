-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 08, 2020 at 07:08 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.3.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `q_id` int(11) NOT NULL,
  `q_name` varchar(200) COLLATE utf8mb4_unicode_nopad_ci NOT NULL,
  `t_id` int(11) NOT NULL,
  `answer` varchar(20) COLLATE utf8mb4_unicode_nopad_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_nopad_ci;

-- --------------------------------------------------------

--
-- Table structure for table `score`
--

CREATE TABLE `score` (
  `u_id` int(11) NOT NULL,
  `t_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `score` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_nopad_ci;

-- --------------------------------------------------------

--
-- Table structure for table `topics`
--

CREATE TABLE `topics` (
  `t_id` int(11) NOT NULL,
  `tname` varchar(50) COLLATE utf8mb4_unicode_nopad_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_nopad_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `u_id` int(11) NOT NULL,
  `name` varchar(200) COLLATE utf8mb4_unicode_nopad_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_nopad_ci NOT NULL,
  `uname` varchar(20) COLLATE utf8mb4_unicode_nopad_ci NOT NULL,
  `password` varchar(16) COLLATE utf8mb4_unicode_nopad_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_nopad_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD KEY `Fk_question` (`t_id`);

--
-- Indexes for table `score`
--
ALTER TABLE `score`
  ADD KEY `fk_score_topic` (`t_id`),
  ADD KEY `fk_score_user` (`u_id`);

--
-- Indexes for table `topics`
--
ALTER TABLE `topics`
  ADD PRIMARY KEY (`t_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`u_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `question`
--
ALTER TABLE `question`
  ADD CONSTRAINT `Fk_question` FOREIGN KEY (`t_id`) REFERENCES `topics` (`T_Id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `score`
--
ALTER TABLE `score`
  ADD CONSTRAINT `fk_score_topic` FOREIGN KEY (`t_id`) REFERENCES `topics` (`T_Id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_score_user` FOREIGN KEY (`u_id`) REFERENCES `user` (`U_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
