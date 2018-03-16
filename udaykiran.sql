-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 16, 2018 at 12:44 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `udaykiran`
--

-- --------------------------------------------------------

--
-- Table structure for table `table1`
--

CREATE TABLE `table1` (
  `user_name` varchar(100) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table1`
--

INSERT INTO `table1` (`user_name`, `user_email`, `password`) VALUES
('udaykiran', 'udaykiran.dakavarapu@gmail.com', ''),
('kiranphp', 'kiran.dakavarapu@gmail.com', '12345'),
('harika', 'harika@gmail.com', '1234'),
('pawan', 'janaseana@gmail.com', '1234'),
('hlooo', 'dfogjdfogj@gmail.com', '1234'),
('DGFSFG', 'DGG', '1234'),
('hrtdyrty', 'rytrtytry', '1234'),
('fgsfg', 'dfgdfg', '1234'),
('kiran', 'v@gmail.com', '1234'),
('dfgdfg', 'dgdfg', '1234'),
('dfgdfg', 'sdfgfdg', '1234'),
('sdsg', 'v1@gmail.com', '1234'),
('fghfghfg', 'v2@gmail.com', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `table2`
--

CREATE TABLE `table2` (
  `ID` int(255) NOT NULL,
  `title` varchar(1000) NOT NULL,
  `description` text NOT NULL,
  `photo` longtext NOT NULL,
  `comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table2`
--

INSERT INTO `table2` (`ID`, `title`, `description`, `photo`, `comment`) VALUES
(1, 'headlines', 'hiii this is todays newssss', 'news2.jpg', 'how its happened'),
(2, 'my news', 'dfgdfgdfgdfgdfgdfg', 'news2.jpg', 'hiiiii hlo comment'),
(3, 'dfgdfgdfg', 'dfgdfgdfgdfg', 'news1.jpg', 'dgsfgdgfy'),
(4, 'fdghfgh', 'fghfghf', 'news2.jpg', 'fgbdghfg');

-- --------------------------------------------------------

--
-- Table structure for table `table4`
--

CREATE TABLE `table4` (
  `comment` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table4`
--

INSERT INTO `table4` (`comment`) VALUES
('helo worlssssddd'),
('hellooooo  worldddddd22222');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `table2`
--
ALTER TABLE `table2`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `table2`
--
ALTER TABLE `table2`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
